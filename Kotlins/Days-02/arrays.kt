fun main(){
    val cars = arrayOf("Volvo", "BMW", "Ford", "Mazda")
    println("this lenght of array cars : "+ cars.size)
    for (x in cars) {
    println(x)
    }
    if ("Volvo" in cars) {
        println("It exists!")
      } else {
        println("It does not exist.")
      }
}