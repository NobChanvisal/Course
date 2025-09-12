using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Runtime.Serialization.Formatters.Binary;
using System.IO;
using System.Runtime.Remoting.Messaging;

namespace File_with_append_object
{
    [Serializable]
    class Student
    {
        public int Id;
        public string Name;
        public int Age;

        public void Header()
        {
            Console.WriteLine($"{"ID".PadRight(10)}{"Name".PadRight(30)}{"Age".ToString().PadRight(5)}");
            for (int i = 0; i < 45; i++)
            {
                Console.Write("-");
            }
            Console.WriteLine();

        }
        public void Display()
        {
            Console.WriteLine($"{Id.ToString().PadRight(10)}{Name.PadRight(30)}{Age.ToString().PadRight(5)}");
            
        }
    }
    internal class Program
    {
        static string filePath = "students.bin";
        static void Main(string[] args)
        {
            int choice;
            do
            {
                Console.WriteLine("\n===== Student Management System =====");
                Console.WriteLine("[1] Add New Student");
                Console.WriteLine("[2] View All Students");
                Console.WriteLine("[3] Search Student by ID");
                Console.WriteLine("[4] Delete Student by ID");
                Console.WriteLine("[5] Exit");
                Console.Write("Choose an option: ");
                choice = Convert.ToInt32(Console.ReadLine());

                switch (choice)
                {
                    case 1:
                        AddStudent();
                        break;
                    case 2:
                        ViewStudents();
                        break;
                    case 3:
                        SearchStudent();
                        break;
                    case 4:
                        DeleteStudent();
                        break;
                    case 5:
                        Console.WriteLine("Exiting program...");
                        break;
                    default:
                        Console.WriteLine("Invalid choice. Try again.");
                        break;
                }
            } while (choice != 5);
        }

        //function for save student to file
        static void SaveStudents(List<Student> students)
        {
            using (FileStream fs = new FileStream(filePath, FileMode.Create))
            {
                BinaryFormatter bf = new BinaryFormatter();
                bf.Serialize(fs, students);
            }
        }

        //get student function
        static List<Student> LoadStudents()
        {
            if (!File.Exists(filePath))
                return new List<Student>();

            using (FileStream fs = new FileStream(filePath, FileMode.Open))
            {
                if (fs.Length == 0) return new List<Student>(); // empty file
                BinaryFormatter bf = new BinaryFormatter();
                return (List<Student>)bf.Deserialize(fs);
            }
        }

        //function for add new student
        static void AddStudent()
        {
            
            List<Student> students = LoadStudents();

            Student student = new Student();
            Console.Write("Enter Student ID: ");
            student.Id = Convert.ToInt32(Console.ReadLine());

            Console.Write("Enter Student Name: ");
            student.Name = Console.ReadLine();

            Console.Write("Enter Student Age: ");
            student.Age = Convert.ToInt32(Console.ReadLine());

            students.Add(student);
            SaveStudents(students);

            Console.WriteLine("Student added successfully!");
        }
        

        static void ViewStudents()
        {

            List<Student> students = LoadStudents();

            if (students.Count == 0)
            {
                Console.WriteLine("No students found.");
            }
            else
            {
                Console.WriteLine("\n--- Student List ---");
                Student stu = new Student();
                stu.Header();
                foreach (var student in students)
                {
                    student.Display();
                }
            }
        }

        static void SearchStudent()
        {
            List<Student> students = LoadStudents();

            Console.Write("Enter Student ID to search: ");
            int searchId = Convert.ToInt32(Console.ReadLine());

            Student found = students.Find(s => s.Id == searchId);

            if (found != null)
            {
                Console.WriteLine("\n--- Student Found ---");
                found.Display();
            }
            else
            {
                Console.WriteLine("Student not found.");
            }
        }

        // ✅ Delete student by ID
        static void DeleteStudent()
        {
            List<Student> students = LoadStudents();

            Console.Write("Enter Student ID to delete: ");
            int deleteId = Convert.ToInt32(Console.ReadLine());

            Student found = students.Find(s => s.Id == deleteId);

            if (found != null)
            {
                students.Remove(found);
                SaveStudents(students);
                Console.WriteLine("Student deleted successfully.");
            }
            else
            {
                Console.WriteLine("Student not found.");
            }
        }


    }
}
