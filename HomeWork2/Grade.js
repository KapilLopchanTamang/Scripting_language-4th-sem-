let percentage = prompt("Enter the percentage");
if (percentage <= 100 && percentage >= 90) {
    console.log("Grade A");
} else if (percentage >= 80 && percentage < 90) {
    console.log("Grade B");
} else if (percentage >= 70 && percentage < 80) {
    console.log("Grade C");
} else if (percentage >= 60 && percentage < 70) {
    console.log("Grade D");
} else {
    console.log("Grade F");
}
