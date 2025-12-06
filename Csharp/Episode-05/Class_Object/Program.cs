using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Class_Object
{
    class Car
    {
        public int _Id;
        public string _Name;
        public int _year;

        //constructor with parameter
        public Car(int id, string name, int year)
        {
            _Id = id;
            _Name = name;
             _year = year;
        }
    }
    
    internal class Program
    {
        //static void Main(string[] args)
        //{
        //    Car mycar = new Car(1,"tesla",2025);
        //    Console.WriteLine($"{mycar._Id}, {mycar._Name}, {mycar._year}");

        //    //using with list
        //    List<Car> carlist = new List<Car>();
        //    Console.Write("enter number of cars : ");
        //    int count = int.Parse(Console.ReadLine());
        //    for (int i = 0; i < count; i++)
        //    {
        //        Console.Write("\nenter id : ");
        //        int newId = int.Parse(Console.ReadLine());
        //        Console.Write("enter name : ");
        //        string newName = Console.ReadLine();
        //        Console.Write("enter years : ");
        //        int newYear = int.Parse(Console.ReadLine());
        //        Car newCar = new Car(newId, newName, newYear);
        //        carlist.Add(newCar);
        //    }
        //    Console.WriteLine("\nThis is car list : ");
        //    Console.WriteLine("---------------------------");
        //    foreach(Car car in carlist)
        //    {
        //        Console.WriteLine($"{car._Id.ToString().PadRight(10)}{car._Name.PadRight(30)}{car._year.ToString().PadRight(10)}");
        //    }
        //}
        static void Main(string[] args)
        {
            BankingSystem bankingSystem = new BankingSystem();
            bankingSystem.showBanking();
        }
    }
}
