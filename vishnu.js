//write a code to print string in reverse?
//https://www.geeksforgeeks.org/reverse-a-string-in-javascript/
//Method 1: without built in Array.prototype.reverse().
function ReverseString(str) { 
  
    // Check input 
    if(!str || str.length < 2 ||  
            typeof str!== 'string') { 
        return 'Not valid';  
    } 
      
    // Take empty array revArray 
    const revArray = []; 
    const length = str.length - 1; 
      
    // Looping from the end 
    for(let i = length; i >= 0; i--) { 
        revArray.push(str[i]); 
    } 
      
    // Joining the array elements 
    return revArray.join(''); 
} 
//Method 2: built in Array.prototype.reverse()
function ReverseString(str) { 
   return str.split('').reverse().join('') 
}
//ES6 way
const ReverseString = str => [...str].reverse().join('');