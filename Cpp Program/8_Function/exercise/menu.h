#ifndef MENU
#define MENU
#include <antheader.h>

class Menu
{
	public:
		string title;
		string menus[20];
		int numberOfMenu, selectedMenu;
		int menuColor = 7;
		
		
		int y = 5;
		char choice;
		
		void display()
		{
		
			setcursor(false, 0);
			cout << endl<<endl<<endl;
			drawBoxDoubleLineWithBG(6,2,60,numberOfMenu + 4,10);	
			gotoxy(16,3);
			foreColor(11);
			cout << "    " << title << endl;
			HLine(6, 4, 60,10,205);
			foreColor(menuColor);
			for (int i = 0; i < numberOfMenu; i++)
			{
				
				gotoxy(8,i + 5);cout << "    " << menus[i] << endl;
			}
			gotoxy(8,numberOfMenu + 5);cout << "    ---------------------------------------------------" << endl;
			gotoxy(8,numberOfMenu + 6);cout << "    Note: [Down Arrow] Down, [Up Arrow] Up, [o] Select" << endl;
			foreColor(7);
			
			gotoxy(7, y);
			foreColor(3);
			cout << "==>";
			foreColor(menuColor);
			
			select:
			choice = getch();
			if (choice == 80)
			{
				gotoxy(7, y);
				cout << "    ";
				
				if (y == numberOfMenu + 4)
				{
					y = 5;
				}
				else
				{
					y++;
				}
				
				gotoxy(7, y);
				foreColor(3);
				cout << "==>";
				foreColor(7);
				goto select;
			}
			else if (choice == 72)
			{
				gotoxy(7, y);
				cout << "    ";
				
				if (y == 5)
				{
					y = numberOfMenu + 4;
				}
				else
				{
					y--;
				}
				
				gotoxy(7, y);
				foreColor(3);
				cout << "==>";
				foreColor(7);
				goto select;
			}
			else if (choice == 'o'||choice == 'O')
			{
				gotoxy(7,numberOfMenu + 9);
				selectedMenu = y - 4;
				setcursor(true, 0);
			}
			else
			{
				goto select;
			}
			
			
		}
			
};
#endif // MENU