// === Универсальный маппинг и символы криптовалют ===
const cryptoMap = {
    "Bitcoin": "bitcoin",
    "Ethereum": "ethereum",
    "Binance Coin": "binancecoin",
    "SOLANA": "solana",
    "Ripple": "ripple",
    "DogeCoin": "dogecoin",
    "Cardano": "cardano",
    "Tether ERC-20": "tether",
    "USD Coin": "usd-coin",
    "ChainLink": "chainlink",
    "Polkadot": "polkadot",
    "Litecoin": "litecoin",
    "Shiba Inu": "shiba-inu",
    "Tron": "tron",
    "Avalanche": "avalanche-2"
    // Добавь остальные по необходимости
};

const cryptoSymbols = {
    "bitcoin": "BTC",
    "ethereum": "ETH",
    "solana": "SOL",
    "dogecoin": "DOGE",
    "shiba-inu": "SHIB",
    "tether": "USDT",
    "usd-coin": "USDC",
    "binancecoin": "BNB",
    "ripple": "XRP",
    "cardano": "ADA",
    "litecoin": "LTC",
    "chainlink": "LINK",
    "polkadot": "DOT",
    "tron": "TRX",
    "avalanche-2": "AVAX"
};

// === Конфигурация стран ===
const countries = {
    br: { currency: 'BRL', locale: 'pt-BR', symbol: 'R$', name: 'Brasil' },
    mx: { currency: 'MXN', locale: 'es-MX', symbol: '$', name: 'México' },
    ar: { currency: 'ARS', locale: 'es-AR', symbol: '$', name: 'Argentina' },
    co: { currency: 'COP', locale: 'es-CO', symbol: '$', name: 'Colombia' },
    cl: { currency: 'CLP', locale: 'es-CL', symbol: '$', name: 'Chile' },
    pe: { currency: 'PEN', locale: 'es-PE', symbol: 'S/', name: 'Perú' },
    ve: { currency: 'VES', locale: 'es-VE', symbol: 'Bs.', name: 'Venezuela' },
    bo: { currency: 'BOB', locale: 'es-BO', symbol: 'Bs.', name: 'Bolivia' },
    py: { currency: 'PYG', locale: 'es-PY', symbol: '₲', name: 'Paraguay' },
    uy: { currency: 'UYU', locale: 'es-UY', symbol: '$', name: 'Uruguay' },
    ec: { currency: 'USD', locale: 'es-EC', symbol: '$', name: 'Ecuador' },
    sv: { currency: 'USD', locale: 'es-SV', symbol: '$', name: 'El Salvador' },
    pa: { currency: 'PAB', locale: 'es-PA', symbol: 'B/.', name: 'Panamá' },
    cr: { currency: 'CRC', locale: 'es-CR', symbol: '₡', name: 'Costa Rica' },
    ni: { currency: 'NIO', locale: 'es-NI', symbol: 'C$', name: 'Nicaragua' },
    hn: { currency: 'HNL', locale: 'es-HN', symbol: 'L', name: 'Honduras' },
    gt: { currency: 'GTQ', locale: 'es-GT', symbol: 'Q', name: 'Guatemala' },
    do: { currency: 'DOP', locale: 'es-DO', symbol: 'RD$', name: 'Rep. Dominicana' },
    cu: { currency: 'CUP', locale: 'es-CU', symbol: '$', name: 'Cuba' },
    // Добавь остальные при необходимости
};

// === Тексты на двух языках ===
const texts = {
    loading: { 'pt-BR': 'Carregando...', 'es': 'Cargando...' },
    unsupported: { 'pt-BR': 'Moeda não suportada', 'es': 'Moneda no soportada' },
    unavailable: { 'pt-BR': 'Preço indisponível', 'es': 'Precio no disponible' },
    unavailableCard: { 'pt-BR': 'Indisponível', 'es': 'No disponible' },
    approximately: { 'pt-BR': 'Aproximadamente', 'es': 'Aproximadamente' }
};

// Элементы DOM
const moneySelect = document.getElementById('money');
const criptoSelect = document.getElementById('cripto');
const resultElement = document.getElementById('result');
const countrySelect = document.getElementById('country_setup');

// Кэш цен
let pricesCache = {};
let lastUpdate = 0;
const CACHE_TIME = 60000; // 60 секунд

// === Получение текущей конфигурации по стране ===
function getCurrentConfig() {
    const countryCode = countrySelect?.value || 'br';
    const config = countries[countryCode] || countries.br; // fallback на Бразилию
    const isSpanish = config.locale.startsWith('es');
    return {
        ...config,
        isSpanish,
        texts: {
            loading: texts.loading[isSpanish ? 'es' : 'pt-BR'],
            unsupported: texts.unsupported[isSpanish ? 'es' : 'pt-BR'],
            unavailable: texts.unavailable[isSpanish ? 'es' : 'pt-BR'],
            unavailableCard: texts.unavailableCard[isSpanish ? 'es' : 'pt-BR'],
            approximately: texts.approximately[isSpanish ? 'es' : 'pt-BR']
        }
    };
}

// === Загрузка цен с поддержкой разных валют ===
async function fetchPrices() {
    const { currency } = getCurrentConfig();
    const currencyLower = currency.toLowerCase();

    const now = Date.now();
    if (now - lastUpdate < CACHE_TIME && pricesCache[currencyLower]) {
        return pricesCache[currencyLower];
    }

    const ids = Object.values(cryptoMap).join(',');
    try {
        const response = await fetch(
            `https://api.coingecko.com/api/v3/simple/price?ids=${ids}&vs_currencies=${currencyLower}`
        );
        if (!response.ok) throw new Error('API error');
        const data = await response.json();

        pricesCache[currencyLower] = data;
        lastUpdate = now;
        return data;
    } catch (err) {
        console.error('Erro ao carregar preços:', err);
        return null;
    }
}

// === Обновление калькулятора ===
async function updateCalculator() {
    if (!moneySelect || !criptoSelect || !resultElement) return;

    const config = getCurrentConfig();
    const fiatAmount = parseFloat(moneySelect.value.replace(/\s/g, ''));

    if (isNaN(fiatAmount) || fiatAmount <= 0) {
        resultElement.textContent = '';
        return;
    }

    const selectedText = criptoSelect.options[criptoSelect.selectedIndex].text.trim();
    const cryptoId = cryptoMap[selectedText];

    if (!cryptoId) {
        resultElement.textContent = config.texts.unsupported;
        return;
    }

    resultElement.textContent = config.texts.loading;

    const prices = await fetchPrices();
    const priceInFiat = prices?.[cryptoId]?.[config.currency.toLowerCase()];

    if (!priceInFiat) {
        resultElement.textContent = config.texts.unavailable;
        return;
    }

    const amountInCrypto = fiatAmount / priceInFiat;
    const symbol = cryptoSymbols[cryptoId] || selectedText.split(' ')[0].toUpperCase();

    const formattedCrypto = amountInCrypto < 0.000001
        ? amountInCrypto.toExponential(4)
        : amountInCrypto.toLocaleString(config.locale, {
            minimumFractionDigits: 2,
            maximumFractionDigits: 8
        });

    resultElement.textContent = `${config.texts.approximately} ${formattedCrypto} ${symbol}`;
}

// === Обновление карточек слайдера ===
async function updateSliderCards() {
    const config = getCurrentConfig();
    const prices = await fetchPrices();

    const valueElements = document.querySelectorAll('.card_cardCriptoValue__Tno1s');
    if (!prices) {
        valueElements.forEach(el => el.textContent = config.texts.unavailableCard);
        return;
    }

    document.querySelectorAll('.card_cardCripto__ZqxAq').forEach(card => {
        const nameEl = card.querySelector('.card_cardCriptoName__P3HXj');
        const valueEl = card.querySelector('.card_cardCriptoValue__Tno1s');
        if (!nameEl || !valueEl) return;

        const cryptoName = nameEl.textContent.trim();
        const cryptoId = cryptoMap[cryptoName];

        const price = prices[cryptoId]?.[config.currency.toLowerCase()];

        if (price) {
            let formatted;
            if (price < 0.01) {
                formatted = price.toFixed(8).replace(/0+$/, '').replace(/\.$/, '');
            } else {
                formatted = price.toLocaleString(config.locale, {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 8
                });
            }
            valueEl.textContent = `${config.symbol} ${formatted}`;
        } else {
            valueEl.textContent = config.texts.unavailableCard;
        }
    });
}

// === Инициализация при загрузке страницы ===
document.addEventListener('DOMContentLoaded', () => {
    // Первоначальное обновление
    updateSliderCards();
    updateCalculator();

    // События калькулятора
    if (moneySelect && criptoSelect) {
        moneySelect.addEventListener('input', updateCalculator);  // input для живого обновления
        moneySelect.addEventListener('change', updateCalculator);
        criptoSelect.addEventListener('change', updateCalculator);
    }

    // Реакция на смену страны
    if (countrySelect) {
        countrySelect.addEventListener('change', () => {
            // Очищаем кэш при смене валюты
            pricesCache = {};
            lastUpdate = 0;
            updateSliderCards();
            updateCalculator();
        });
    }

    // Автообновление каждые 60 секунд
    setInterval(() => {
        updateSliderCards();
        updateCalculator();
    }, 60000);
});