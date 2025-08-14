using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Multi_Array
{
    internal class Program
    {
        static void lesson()
        {
            //note: - The single comma [ , ] represents the array is 2 dimensional.
            //      - numbers.GetLength(0) : gives the number of rows in a 2D array
            //      - numbers.GetLength(1) : gives the number of elements in the row


            //int[,] x = new int[2, 3];//the array can store 6 elements (2 * 3).
            int[,] x = new int[2, 3] { { 1, 2, 3 }, { 3, 4, 5 } };


            // access first element from first row
            Console.WriteLine($"{x[0, 0]}");  // returns 1

            // access third element from second row
            Console.WriteLine($"{x[1, 2]}");  // returns 5

            // access third element from first row
            Console.WriteLine($"{x[0, 2]}");  // returns 3
            Console.WriteLine("-------------------------------------------");
            for (int i = 0; i < x.GetLength(0); i++)
            {
                Console.Write("Row " + i + ": ");

                for (int j = 0; j < x.GetLength(1); j++)
                {
                    Console.Write(x[i, j] + " ");

                }
                Console.WriteLine();
            }
        }
        static void studentTable()
        {
            int[,] grades = new int[3, 4];

            // Input
            for (int i = 0; i < 3; i++)
            {
                Console.WriteLine($"Enter score for Student {i + 1}:");
                for (int j = 0; j < 4; j++)
                {
                    Console.Write($"\tSubject {j + 1}: ");
                    grades[i, j] = int.Parse(Console.ReadLine());
                }
            }

            Console.WriteLine("\nGrades Table:");
            Console.WriteLine("           Subject1  Subject2  Subject3  Subject4");
            for (int i = 0; i < 3; i++)
            {
                Console.Write($"Student {i + 1}   ");
                for (int j = 0; j < 4; j++)
                {
                    Console.Write($"{grades[i, j],10}");
                }
                Console.WriteLine();
            }

            // Average per student
            Console.WriteLine("\nAverages:");
            for (int i = 0; i < 3; i++)
            {
                int sum = 0;
                for (int j = 0; j < 4; j++)
                {
                    sum += grades[i, j];
                }
                float average = (float)sum / 4;
                Console.WriteLine($"Student {i + 1} average: {average:F2}");
            }
            Console.ReadLine();
        }
        static void busSeats()
        {
            
                string[,] seats = new string[4, 3]; // 4 rows x 3 seats
                int seatNum = 1;
                int pricePerTicket = 5;
                int totalTickets = 0;
                int totalIncome = 0;

                // Initialize seat numbers
                for (int i = 0; i < 4; i++)
                {
                    for (int j = 0; j < 3; j++)
                    {
                        seats[i, j] = seatNum.ToString();
                        seatNum++;
                    }
                }

                bool running = true;
                while (running)
                {
                    Console.Clear();
                    Console.WriteLine("=== 🚌 Bus Ticket Booking ===");
                    Console.WriteLine("1. Show Seat Layout");
                    Console.WriteLine("2. Book a Seat");
                    Console.WriteLine("3. Show Report");
                    Console.WriteLine("0. Exit");
                    Console.Write("Choose option: ");
                    string choice = Console.ReadLine();

                    if (choice == "1")
                    {
                        // Show seat layout
                        Console.Clear();
                        Console.WriteLine("🪑 Seat Layout:\n");
                        for (int i = 0; i < 4; i++)
                        {
                            for (int j = 0; j < 3; j++)
                            {
                            string s = "[" + seats[i, j] + "]";
                            Console.Write($"{s.PadRight(10)}");
                        }
                            Console.WriteLine();
                        }
                        Console.WriteLine("\n(Press Enter to return to menu)");
                        Console.ReadLine();
                    }
                    else if (choice == "2")
                    {
                        // Book a seat
                        Console.Clear();
                        Console.WriteLine("🪑 Available Seats:\n");
                        for (int i = 0; i < 4; i++)
                        {
                            for (int j = 0; j < 3; j++)
                            {
                                string s = "[" + seats[i, j] + "]";
                            Console.Write($"{s.PadRight(10)}");
                            }
                            Console.WriteLine();
                        }

                        Console.Write("\nEnter seat number to book: ");
                        string input = Console.ReadLine();

                        bool booked = false;

                        for (int i = 0; i < 4 && !booked; i++)
                        {
                            for (int j = 0; j < 3 && !booked; j++)
                            {
                                if (seats[i, j] == input)
                                {
                                Console.Write("enter customer name : ");
                                string emp = Console.ReadLine();
                                    seats[i, j] = emp;
                                    totalTickets++;
                                    totalIncome += pricePerTicket;
                                    Console.WriteLine($"\nSeat {input} booked. Price: ${pricePerTicket}");
                                    booked = true;
                                }
                            }
                        }

                        if (!booked)
                        {
                            Console.WriteLine("\n   Seat not available or already booked.");
                        }

                        Console.WriteLine("\n(Press Enter to return to menu)");
                        Console.ReadLine();
                    }
                    else if (choice == "3")
                    {
                        // Show report
                        Console.Clear();
                        Console.WriteLine("Booking Report:");
                        Console.WriteLine($"Total tickets sold: {totalTickets}");
                        Console.WriteLine($"Total income: ${totalIncome}");
                        Console.WriteLine("\n(Press Enter to return to menu)");
                        Console.ReadLine();
                    }
                    else if (choice == "0")
                    {
                        running = false;
                    }
                    else
                    {
                        Console.WriteLine("\nInvalid option. Try again.");
                        Console.ReadLine();
                    }
                }

                Console.Clear();
                Console.WriteLine("Thank you for using the Bus Ticket System!");
        
    }
        static void gridGame()
        {
      
                char[,] grid = new char[5, 5];
                int playerRow = 0;
                int playerCol = 0;
                int goalRow = 4, goalCol = 4;
                int score = 0;

                // Set up obstacles
                grid[1, 1] = 'X';
                grid[2, 3] = 'X';
                grid[3, 1] = 'X';

                while (true)
                {
                    Console.Clear();

                    // Fill empty cells
                    for (int i = 0; i < 5; i++)
                        for (int j = 0; j < 5; j++)
                            if (grid[i, j] != 'X') // Keep obstacles
                                grid[i, j] = '.';

                    // Set goal and player
                    grid[goalRow, goalCol] = 'G';
                    grid[playerRow, playerCol] = 'P';

                    // Display grid
                    for (int i = 0; i < 5; i++)
                    {
                        for (int j = 0; j < 5; j++)
                            Console.Write(grid[i, j] + " ");
                        Console.WriteLine();
                    }

                    Console.WriteLine($"\nMoves: {score}");
                    Console.Write("Move (W/A/S/D), H=Help, Q=Quit: ");
                    char move = Char.ToLower(Console.ReadKey().KeyChar);

                    if (move == 'q') break;
                    if (move == 'h')
                    {
                        Console.Clear();
                        Console.WriteLine("=== HELP ===");
                        Console.WriteLine("Move the player [P] to the goal [G]");
                        Console.WriteLine("Avoid obstacles [X]");
                        Console.WriteLine("Use keys:");
                        Console.WriteLine("W = Up");
                        Console.WriteLine("S = Down");
                        Console.WriteLine("A = Left");
                        Console.WriteLine("D = Right");
                        Console.WriteLine("Press any key to return...");
                        Console.ReadKey();
                        continue;
                    }

                    int newRow = playerRow;
                    int newCol = playerCol;

                    if (move == 'w') newRow--;
                    else if (move == 's') newRow++;
                    else if (move == 'a') newCol--;
                    else if (move == 'd') newCol++;

                    // Check bounds
                    bool lose = false;
                    if (newRow >= 0 && newRow < 5 && newCol >= 0 && newCol < 5)
                    {
                        if (grid[newRow, newCol] != 'X') // No obstacle
                        {
                            playerRow = newRow;
                            playerCol = newCol;
                            score++;
                        }
                        else
                        {
                            break;
                        }
                        
                    }

                    // Check goal
                    if (playerRow == goalRow && playerCol == goalCol)
                    {
                        Console.Clear();
                        Console.WriteLine("🎉 Congratulations! You reached the goal!");
                        Console.WriteLine($"Total moves: {score}");
                        break;
                    }
                    
                
            }

                Console.WriteLine("\nGame Over!");
                Console.WriteLine($"Total moves: {score}");

        }

        static void Main(string[] args)
        {
            //lesson();
            studentTable();
            //busSeats();
            //gridGame();
        }
    }
}
