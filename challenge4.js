function hour_min(time) {
    let hours = time / 60;
    const min = time % 60;
    return time + "is equal to: " + Math.floor(hours) + " and " + min + " minutes.";
}

console.log(hour_min(71));