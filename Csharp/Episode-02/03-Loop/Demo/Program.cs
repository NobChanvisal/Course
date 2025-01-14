using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Remoting.Services;
using System.Text;
using System.Threading.Tasks;

namespace Demo
{
    internal class Program
    {
        static void demoFor()
        {
            for (int i = 0; i < 10; i++)
            {
                //Console.WriteLine("Hello world !!");
                Console.WriteLine(i);
            }
        }
        static void demoNestloop()
        {
            for(int i = 1; i < 5; i++)
            {
                for(int j = 1; j < 5; j++)
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }
        }
        static void exercise_1()
        {
            int sum = 0;
            Console.WriteLine("Print even number ");
            Console.Write("Enter no of number : ");
            int count = Convert.ToInt32(Console.ReadLine());
            for(int i = 1; i<=count; i++)
            {
                Console.WriteLine(2*i);
                sum += 2 * i;
            }
            Console.WriteLine($"sum = {sum}");
        }
        static void exercise_2()
        {
            int sum = 0;
            Console.WriteLine("Sum of input number ");
            Console.WriteLine("---------------------------");
            Console.Write("enter no of number : ");
            double count = Convert.ToDouble(Console.ReadLine());
            for(int i = 1; i<= count; i++)
            {
                Console.Write("Enter number : ");
                int number = Convert.ToInt32(Console.ReadLine());
                sum += number;
            }
            Console.WriteLine($"sum = {sum}");
            Console.WriteLine($"average = {sum / count}");
        }
        static void exercise_3()
        {
            for (int i = 1; i <= 5; i++)
            {
                for (int j = i; j <= 5; j++)
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }
        }
        static void exercise_4()
        {
            for (int i = 1; i <= 5; i++)
            {
                for (int j = 1; j <= i; j++)
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }
        }
        static void exercise_5()
        {
            for (int i = 1; i <= 5; i++)
            {
                for (int j = i; j <= 5; j++)
                {
                    if(i % 2 == 0)
                    {
                        Console.Write("@");
                    }
                    else
                    {
                        Console.Write("*");
                    }
                }
                Console.WriteLine();
            }
        }
        static void exercise_6()
        {
            for (int i = 1; i <= 5; i++)
            {

                for (int j = i; j <= 5; j++)
                {                
                     Console.Write(" ");
                }
                for (int j = 1; j <= i; j++)
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }
        }
        static void Main(string[] args)
        {
            //demoNestloop();
            exercise_6();
        }
    }
}
