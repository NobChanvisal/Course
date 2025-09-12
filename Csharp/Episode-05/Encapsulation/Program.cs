using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Encapsulation
{
    public class Car
    {
        // A private field to store the data
        private string _name;
        private int _years;

        // A public property to expose the data
        public string Name
        {
            get
            {
                return _name;
            }
            set
            {
                _name = value;
            }
        }
        public int Years
        {
            get { return _years;  }
            set { _years = value;  }
        }
    }
    internal class Program
    {
        static void Main(string[] args)
        {
            Car car = new Car();
            car.Name = "Tesla";
            Console.WriteLine(car.Name);        }
    }
}
