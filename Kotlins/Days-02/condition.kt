// fun main() {
//     val time = 20
//     val greeting = if (time < 18) "Good day." else "Good evening."
//     println(greeting)
// }
// fun main(){
//     var number:Int = 50;
//     if(number >= 50){
//         println("You are pass !!");
//     }
// } 
fun main(){
    val number:Int = 20
    var grade:Char
    if(number >=90){
        grade = 'A'
    }
    else if(number >= 80){
        grade = 'B'
    }
    else if(number >= 80){
        grade = 'C'
    }
    else if(number >= 80){
        grade = 'D'
    }
    else if(number >= 80){
        grade = 'E'
    }
    else{
        grade = 'F'
    }
    println("Number = $number, grand = $grade")
}