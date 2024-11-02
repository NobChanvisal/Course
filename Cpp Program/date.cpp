#include <iostream>
#include <ctime>

using namespace std;

string getDate() {
    time_t now = time(nullptr);
    tm* localTime = localtime(&now);

    string period = (localTime->tm_hour >= 12) ? " PM" : " AM";
    string minute = (localTime->tm_min < 10 ? "0" : "") + to_string(localTime->tm_min);
    int hour = localTime->tm_hour % 12;
    if (hour == 0) {
        hour = 12;  
    }
    string date = to_string(localTime->tm_mday) + "-"
                + to_string(localTime->tm_mon + 1) + "-"
                + to_string(localTime->tm_year + 1900) + "|"
                + to_string(hour) + ":"
                + minute + period;

    return date;  
}

int main() {
    string date = getDate();
    cout << "Formatted Date: " << date << endl;  
    return 0;
}
