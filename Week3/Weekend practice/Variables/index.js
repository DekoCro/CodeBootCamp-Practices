/*
Study Time

In the Bootcamp out of each week you spend 7 hours for 4 days and 3 hours for one day attending the classes. Compute the total number of hours you attend per one week and save it to a variable classHours. Make this variable a constant.

Let's say that every week you spend another 30% of the weekly class hours by self studying. Compute the total number of weekly study hours and save it into a variable studyHours.

Compute the total number of study hours throughout the whole Bootcamp assuming that all 12 weeks have the same sum of study hours. Save the result in a variable called totalStudyTime.

Create a string that could eventually by displayed somewhere on the Bootcamp's website saying something like:

Total study time: 400 hours

Put the content of the totalStudyTime variable as the correct value inside the string. Save it in a variable studyMessage.
*/

let hours1 = 7;
let days1 = 4;
let hours2 = 3;
let days2 = 1;

const classHours = (hours1 * days1) + (hours2 * days2);


let studyHours = classHours + (classHours * 0.3);


let weeks = 12;
let totalStudyTime = studyHours * weeks;

let studyMessage = "Total study time: " + totalStudyTime + " hours.";
console.log(studyMessage);