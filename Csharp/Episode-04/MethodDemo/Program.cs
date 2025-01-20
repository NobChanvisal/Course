using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MethodDemo
{
    internal class Program
    {

        static void MyMethod()
        {
            Console.WriteLine("this is method no argument !!!");
        }
        static void MyArgumentMethod(string name)// variable( name) in method call parameters 
        {
            Console.WriteLine("This is method with argument");
            Console.WriteLine($"The value of Parameters = {name}");
        }
        //overloading 
        static int add(int x, int y)
        {
            return x + y;
        }
        static double add(double x, double y) {  return x + y; }

        static void Main(string[] args)
        {
            
            MyArgumentMethod("Dara");//Dara is argument for pass to argument.
            Console.WriteLine($"this is sum : {add(5, 3)}");
            Console.WriteLine($"this is sum : {add(5.5, 3.5)}");
        }
    }
}
