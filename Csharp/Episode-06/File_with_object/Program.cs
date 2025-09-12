using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Runtime.Serialization.Formatters.Binary;
using System.Xml.Linq;
using System.IO;


namespace File_with_object
{
    [Serializable]
    public class Student
    {
        public int id;
        public string name;
        public int age;


        public void display()
        {
            Console.WriteLine($"ID: {id}, Name: {name}, Age: {age}");
        }
    }
    internal class Program
    {
        static void Main(string[] args)
        {
            string filePath = "students.bin";

            // Take user input
            Student student = new Student();
            Console.Write("Enter Student ID: ");
            student.id = Convert.ToInt32(Console.ReadLine());

            Console.Write("Enter Student Name: ");
            student.name = Console.ReadLine();

            Console.Write("Enter Student Age: ");
            student.age = Convert.ToInt32(Console.ReadLine());

            // --- Save data to binary file ---
            using (FileStream fs = new FileStream(filePath, FileMode.Create))
            {
                BinaryFormatter bf = new BinaryFormatter();
                bf.Serialize(fs, student);
            }
            Console.WriteLine("student saved to binary file !!");

            //read data
            using (FileStream fs = new FileStream(filePath, FileMode.Open))
            {
                BinaryFormatter bf = new BinaryFormatter();
                Student loadedstudent = (Student)bf.Deserialize(fs);
                Console.WriteLine("\nStudent loaded from file !!");
                Console.WriteLine("---------------------------");
                loadedstudent.display();
            }
        }
    }
}
