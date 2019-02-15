function area_triange(a, b, c) {
    let perimeter = parseInt(a) + parseInt(b) + parseInt(c);
    let s = perimeter/2;
    let area = Math.sqrt((s * (s - a) * (s - b) * (s - c)));
    return area;
}

console.log(area_triange(5, 12, 13));