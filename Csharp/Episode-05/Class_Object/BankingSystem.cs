using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Class_Object
{
    class Account
    {
        public int accountNo { get; set; }
        public double ballance { get; set; }

        public Account(int accountNO, double ballace) { 
            this.accountNo = accountNO;
            this.ballance = ballace;
        }

    };
    
    internal class BankingSystem
    {
       

        public void showBanking()
        {
            List<Account> accounts = new List<Account>();
            int opt = 0;

            do
            {
                Console.WriteLine("\n\nMenu");
                Console.WriteLine("1.insert\n2.View\n3.Exit");
                Console.Write("enter option : ");
                opt = int.Parse(Console.ReadLine());
                switch (opt)
                {
                    case 1:
                        Console.WriteLine("\nCreate Account : \n");

                        Console.Write("enter account no : ");
                        int no = int.Parse(Console.ReadLine());
                        Console.Write("enter balance     : ");
                        double balance = double.Parse(Console.ReadLine());
                        accounts.Add(new Account(no, balance));
                        Console.WriteLine("Account created success !!");
                        break;
                    case 2:
                        Console.WriteLine("\nAccount List : \n");
                        foreach(var acc in accounts)
                        {
                            Console.WriteLine($"account_no : {acc.accountNo}, ballace : {acc.ballance}");
                        }
                        break;
                }
            } while (opt != 3);
        }
    }
}
