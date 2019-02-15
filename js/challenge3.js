function largest(a, b, c) {
    let largest = a;
    if (b > largest)
        largest = b;
    if (c > largest)
        largest = c;
    return largest;
}

console.log("The largest number is: " + largest(45, 8, 9));