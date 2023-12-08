
let isSunny = true;
let temperature = 28;


if (isSunny && temperature > 25) {
    console.log("Perfect day for a picnic!");
} else {
    console.log("Maybe another day...");
}


isSunny = false;
temperature = 18;


if (isSunny || temperature > 25) {
    console.log("It's either sunny or warm (or both)!");
} else {
    console.log("Neither sunny nor warm...");
}


isSunny = true;
let isNotRaining = true;


if (isSunny && isNotRaining) {
    console.log("Great weather for outdoor activities!");
} else {
    console.log("Maybe indoor plans are a better idea...");
}
