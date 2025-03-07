using System;
using System.Collections.Generic;
using System.Linq;
using System.Linq.Expressions;
using System.Text;
using System.Threading.Tasks;

/*
switch (variable / expression)
{
    case value1:
         Statements executed if expression(or variable) = value1
        break;
    case value2:
         Statements executed if expression(or variable) = value1
        break;
        ... ... ... 
    ... ... ... 
    default:
         Statements executed if no case matches
}
*/
namespace Demo
{
    internal class Program
    {
        static void lisson()
        {
            char ch;
            Console.Write("Enter an option");
            ch = Convert.ToChar(Console.ReadLine());

            switch (Char.ToLower(ch))
            {
                case 'a':
                    Console.WriteLine("Option a");
                    break;
                case 'e':
                    Console.WriteLine("Option e");
                    break;
                case 'i':
                    Console.WriteLine("Option i");
                    break;
                case 'o':
                    Console.WriteLine("Option o");
                    break;
                case 'u':
                    Console.WriteLine("Option u");
                    break;
                default:
                    Console.WriteLine("No option");
                    break;
            }
        }
        static void lesson_2()
        {
            int ch;
            Console.Write("Enter an option :");
            ch = Convert.ToInt32(Console.ReadLine());

            switch (ch)
            {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    Console.WriteLine("Option");
                    break;
                default:
                    Console.WriteLine("No option");
                    break;
            }
        }
        static void exercise_1()
        {
            char op;
            double first, second, result;

            Console.Write("1.Add \n 2.Subtract \n 3.Multiply \n 4.Divide\n");
            Console.Write("Enter option : ");
            op = Convert.ToChar(Console.ReadLine());
            Console.Write("Enter first number: ");
            first = Convert.ToDouble(Console.ReadLine());
            Console.Write("Enter second number: ");
            second = Convert.ToDouble(Console.ReadLine());

            switch (op)
            {
                case '1':
                    result = first + second;
                    Console.WriteLine($"{first:F2} + {second:F2} = {result:F2}");
                    break;

                case '2':
                    result = first - second;
                    Console.WriteLine($"{first:F2} - {second:F2} = {result:F2}");
                    break;

                case '3':
                    result = first * second;
                    Console.WriteLine($"{first:F2} * {second:F2} = {result:F2}");
                    break;

                case '4':
                    result = first / second;
                    Console.WriteLine($"{first:F2} / {second:F2} = {result:F2}");
                    break;

                default:
                    Console.WriteLine("Invalid Operator");
                    break;

            }
        }
        
        static void exercise_2()
        {
            Console.WriteLine("Exercise-1 : find maximum and minimum");
            Console.WriteLine("---------------------------------------");
            Console.WriteLine("a.maximum ");
            Console.WriteLine("b.minimum");
            Console.WriteLine("---------------------------------------");
            Console.Write("Enter option : ");
            char opt = Convert.ToChar(Console.ReadLine());
            Console.Write("Enter value of number 1 : ");
            double num1 = Convert.ToDouble(Console.ReadLine());
            Console.Write("Enter value of number 2 : ");
            double num2 = Convert.ToDouble(Console.ReadLine());

            switch (opt)
            {
                case 'a': // Find maximum
                    double max = (num1 > num2) ? num1 : num2;
                    Console.WriteLine($"Maximum value: {max:F2}");
                    break;

                case 'b': // Find minimum
                    double min = (num1 < num2) ? num1 : num2;
                    Console.WriteLine($"Minimum value: {min:F2}");
                    break;

                default:
                    Console.WriteLine("Invalid option. Please enter 'a' for maximum or 'b' for minimum.");
                    break;
            }
        }
        static void exercise_3()
        {
        Start:
            Console.WriteLine("Find days of month");
            Console.WriteLine("----------------------------");
            Console.Write("Enter years : ");
            int year = Convert.ToInt32(Console.ReadLine());
            Console.Write("Enter month[1-12] : ");
            int month = Convert.ToInt32(Console.ReadLine());
           
                switch (month)
            {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    Console.WriteLine ("Number of Days 31" );
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    Console.WriteLine("Number of Days 30");
                    break;
                case 2:
                    if (year % 4 == 0)
                    {
                        Console.WriteLine("Number of Days 29");
                    }
                    else
                    {
                        Console.WriteLine("Number of Days 28");
                    }
                    break;
                default:
                    Console.WriteLine( "Invalid...Please Enter the 1 to 12..." );
                    break;
            }
            Console.ReadKey();
            Console.Clear();
            goto Start;
        }
        
        static void exercise_4()
        {
        Start:
            Console.WriteLine("\tDrink store new version");
            Console.WriteLine("\t____________________________________________________");
            Console.WriteLine("\ta. Coca cola -> 2$/can");
            Console.WriteLine("\tb. Fanta     -> 1.8$/can");
            Console.WriteLine("\tc. Pepsi     -> 1.9$/can (5up - 10% off)");
            Console.WriteLine("\td. Sting     -> 2.5$/can (using code : nomoney to get 5%)");
            Console.WriteLine("\te. Exit");
            Console.WriteLine("\t----------------------------------------------------");
            Console.Write("\tChose one op: ");
            char menu = char.ToUpper(Console.ReadKey().KeyChar);
            Console.WriteLine();

            double price = 0;
            switch (menu)
            {
                case 'A':
                    price = 2;
                    break;
                case 'B':
                    price = 1.8;
                    break;
                case 'C':
                    price = 1.9;
                    break;
                case 'D':
                    price = 2.5;
                    break;
                case 'E':
                    return;
                default:
                    Console.WriteLine("\tDon't have option =)");
                    Console.ReadKey();
                    Console.Clear();
                    goto Start;
            }

            Console.Write("\tEnter qty: ");
            int qty = int.Parse(Console.ReadLine());

            double total = qty * price;
            double discount = 0;

            if (menu == 'C' && qty >= 5)
            {
                discount = total * 0.1;
            }

            if (menu == 'D')
            {
                Console.Write("\tEnter discount code (if any): ");
                string code = Console.ReadLine().ToLower();
                if (code == "nomoney")
                {
                    discount = total * 0.05;
                }
            }

            double save = discount;
            double pay = total - save;

            Console.WriteLine("\t____________________________");
            Console.WriteLine("\tQty\t\t: {0}", qty);
            Console.WriteLine("\tTotal\t\t: {0:F2}", total);
            Console.WriteLine("\tSave\t\t: {0:F2}", save);
            Console.WriteLine("\tPayment\t: {0:F2}", pay);
            Console.ReadKey();
            Console.Clear();
            goto Start;
        }
        static void Main(string[] args)
        {
            //double min = 3.14159;
            //Console.WriteLine($"Minimum value: {min:F2}");

            //lisson();

            exercise_4();
        }
    }
}
