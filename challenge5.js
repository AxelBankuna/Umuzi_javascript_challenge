function common(str1, str2) {
    let letters = [];
    for (let i = 0; i < str1.length; i++){
        for (let j = 0; j < str2.length; j++){
            if (str1[i] == str2[j] && letters.indexOf(str1[i]) != 0) {
                // console.log(str1[i] + " is a common letter!!!");
                letters.push(str1[i]);
            }
        }
    }
    return letters;
}
const test = common("houosoeo", "computers");
for (let count = 0; count < test.length; count++)
    console.log(test[count]);