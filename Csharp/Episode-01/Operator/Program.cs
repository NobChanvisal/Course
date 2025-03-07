using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Operator
{
    internal class Program
    {
        static void Exercise_1()
        {
            int code,qty;
            string name;
            double price,total, payment, dis;

            Console.WriteLine("Product information");
            Console.WriteLine("----------------------");
            Console.Write("Enter code     : ");
            code = Convert.ToInt32(Console.ReadLine());
            Console.Write("Enter name     : ");
            name = Console.ReadLine();
            Console.Write("Enter price    : ");
            price = Convert.ToDouble(Console.ReadLine());
            Console.Write("Enter qty      : ");
            qty = Convert.ToInt32(Console.ReadLine());
            Console.Write("Enter discount : ");
            dis = Convert.ToDouble(Console.ReadLine());
            total = qty * price;
            payment = total -(dis/100 * total);

            Console.WriteLine("Code  : "+code);
            Console.WriteLine("Name  : " + name);
            Console.WriteLine("Price : " + price);
            Console.WriteLine("Qty   : " + qty);
            Console.WriteLine("Total : " + total);
            Console.WriteLine("Discount : "+dis);
            Console.WriteLine("Payment  : "+payment);

        }
        static void Main(string[] args)
        {
            Exercise_1();
        }
    }
}
