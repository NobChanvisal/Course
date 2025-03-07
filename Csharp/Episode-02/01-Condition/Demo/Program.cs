using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Demo
{
    internal class Program
    {
        static void Demoif()
        {
            Console.Write("Enter number : ");
            int num = Convert.ToInt32(Console.ReadLine());

            if(num > 10)
            {
                Console.WriteLine("This is statement in if...");
            }
            Console.WriteLine("this is statement end of if..");
        }
        static void DemoIfElse()
        {
            Console.WriteLine("Enter number : ");
            int num = Convert.ToInt32(Console.ReadLine());
            if (num > 10)
            {
                Console.WriteLine("This is statement in if...");
            }
            else
            {
                Console.WriteLine("This is statement in else...");
            }
            Console.WriteLine("this is statement end of condition...");
        }
        static void DemoIfElseIf()
        {
            Console.WriteLine("Enter age : ");
            int age = Convert.ToInt32(Console.ReadLine());
            if (age < 1)
            {
                Console.WriteLine("Baby !!");
            }
            else if(age < 12)
            {
                Console.WriteLine("Young !!");
            }
            else if(age < 18)
            {
                Console.WriteLine("Adolescence");
            }
            else
            {
                Console.WriteLine("Old !!");
            }
        }
        static void exercise_1()
        {
            string result;
            Console.WriteLine("Student information");
            Console.WriteLine("--------------------------");
            Console.Write("Enter id     : ");
            int id = Convert.ToInt32(Console.ReadLine());
            Console.Write("Enter name   : ");
            string name = Console.ReadLine();
            Console.Write("Enter gender : ");
            string gender = Console.ReadLine();
            Console.Write("Enter gpa    : ");
            double gpa = Convert.ToDouble(Console.ReadLine());
            if (gpa >= 50) result = "Pass";
            else result = "Fails";

            Console.WriteLine("View data");
            Console.WriteLine("------------------");
            Console.WriteLine($"id     = {id}");
            Console.WriteLine($"name   = {name}");
            Console.WriteLine($"gender = {gender}");
            Console.WriteLine($"gpa    = {gpa}");
            Console.WriteLine($"result = {result}");
        }
        static void exercise_2()
        {
            double max,min;
            Console.WriteLine("Find maximum and minimum of 2 number");
            Console.WriteLine("-----------------------------------------");
            Console.WriteLine("Enter value of num 1 : ");
            double num = Convert.ToDouble(Console.ReadLine());
            Console.WriteLine("Enter value of num 2 : ");
            double num1 = Convert.ToDouble(Console.ReadLine());
            if(num1 == num)
            {
                Console.WriteLine("both number are equals !!");
                return;
            }
            else if(num < num1)
            {
                max = num1;
                min = num;
            }
            else
            {
                max = num;
                min = num1;
            }
            Console.WriteLine($"Max = {max} and Min = {min}");
        }
        static void exercise_3()
        {
            double dis;
            Console.WriteLine("Product information");
            Console.WriteLine("-------------------------");
            Console.Write("Enter id : ");
            int id = Convert.ToInt32(Console.ReadLine());
            Console.Write("Enter name : ");
            string  name = Console.ReadLine();
            Console.Write("Enter price : ");
            double price = Convert.ToDouble(Console.ReadLine());
            Console.Write("Enter qty   : ");
            int qty = Convert.ToInt32(Console.ReadLine());
            double total = price * qty;
                if (total >= 500)
                {
                    dis = 50;
                }
                else if (total >= 400)
                {
                    dis = 40;
                }
                else if (total >= 300)
                {
                    dis = 30;
                }
                else if (total >= 200)
                {
                    dis = 20;
                }
                else
                {
                    dis = 0;
                }
            double payment = total - (total * dis / 100);
            Console.WriteLine("Output Data Of Product > " );
            Console.WriteLine("===================================" ;
            Console.WriteLine($"Product code     : {id}");
            Console.WriteLine($"Product name     : {name}");
            Console.WriteLine($"Product price    : {price}$") ;
            Console.WriteLine($"Product qty      : {qty}");
            Console.WriteLine($"Product total    : {total}$");
            Console.WriteLine($"Product discount : {dis}%");
            Console.WriteLine($"Product payment  : {payment}$");
        }
        static void exercise_4()
        {
            double payment,use;
        
            Console.WriteLine("Electronic");
            Console.WriteLine("-----------------------");
            Console.Write("Enter room no : ");
            string room = Console.ReadLine();
            Console.Write("Enter value new month : ");
            double newM = Convert.ToDouble(Console.ReadLine());
            Console.Write("Enter value old month : ");
            double oldM = Convert.ToDouble(Console.ReadLine());
            if(newM <= oldM)
            {
                Console.WriteLine("Your value incorrect!! check again");
                
            }
            else
            {
                double use = newM - oldM;
                if(use <= 50)
                {
                    payment = use * 500;
                }
                else if(use <= 100)
                {
                    payment = 50 * 500 + (use - 50) * 1000;
                }
                else if(use <= 150)
                {
                    payment = 50*500 + 50 * 1000 + (use - 100) * 1500;
                }
                else if(use <= 200)
                {
                    payment = 50 * 500 + 50 * 1000 + 50 * 1500 + (use - 150)*2000;
                }
                else
                {
                    payment = 50 * 500 + 50 * 1000 + 50 * 1500 + 50 * 2000 + (use - 200) * 2000;
                }
                Console.WriteLine("----------------------------");
                Console.WriteLine($"Room no : {room}");
                Console.WriteLine($"Use     : {use}");
                Console.WriteLine($"Payment : {payment}");
            }
        }
        static void Main(string[] args)
        {
            exercise_4();
        }
    }
}
