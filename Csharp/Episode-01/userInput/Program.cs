using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace userInput
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int id;
            string firstName;
            string lastName ;
            double gpa;
            string university;
            //string name = $"My full name is: {firstName} {lastName}";
            Console.WriteLine("Enter your information");
            Console.WriteLine("---------------------------------");
            Console.Write("Enter id        : ");
            id = Convert.ToInt32(Console.ReadLine());
            Console.Write("Enter firstName : ");
            firstName = Console.ReadLine();
            Console.Write("Enter lastName  : ");
            lastName = Console.ReadLine();
            Console.Write("Enter gpa       : ");
            gpa = Convert.ToDouble(Console.ReadLine());
            Console.Write("Enter university: ");
            university = Console.ReadLine();
            Console.WriteLine("=================================");
            Console.WriteLine($"Id          : {id}");
            Console.WriteLine($"Full name   : {firstName} {lastName}");
            Console.WriteLine($"GPA         : {gpa}");
            Console.WriteLine($"University  : {university}");
        }

    }
}
