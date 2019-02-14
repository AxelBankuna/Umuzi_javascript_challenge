function largest(a, b, c) {
    let largest = a;
    if (b > largest)
        largest = b;
    if (c > largest)
        largest = c;
    return largest;
}

console.log(largest(45, 8, 9));