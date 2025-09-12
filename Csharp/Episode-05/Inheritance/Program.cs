using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Inheritance
{
    class A
    {
        public void method_A()
        {
            Console.WriteLine("i'm method from class A..");
        }
    }
    class B: A 
    {
        public void method_B()
        {
            Console.WriteLine("i'm method from class B..");
        }
    }
    internal class Program
    {
        static void Main(string[] args)
        {
            B b = new B();
            b.method_A();
            b.method_B();
        }
    }
}
