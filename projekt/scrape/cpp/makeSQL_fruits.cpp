#include <bits/stdc++.h>
using namespace std;

vector< vector<string> > res;

int main() {
  string s;
  vector<string> lines;
  
	while (getline(cin, s)) 
		lines.push_back(s.erase(s.find_last_not_of(" \n\r\t")+1));
	
	int i = 0;
	while (i < lines.size()) {
		if (lines[i].compare("--------------------------------------------------------------------------------") == 0) {
			++i;
			vector<string> info;
			while (lines[i].compare("------------------------------------------------") != 0) {
				if (!lines[i].empty())
					info.push_back(lines[i]);
				++i;
			}
			
			++i;
			res.push_back(info);
		}
		
		i += 2;
	}
	
	for (int j = 0; j < res.size(); ++j) {
		vector<string> info = res[j];
		/*
		if (info.size() == 6) {
			cout << "INSERT INTO `Main_Fruits`(`Name`, `NumImages`, `Name_in_db`, `Link`, `Img1`, `Img2`) VALUES (";
			cout << "'" << info[0] << "', " << 2 << ", '" << info[2] << "', '" << info[3] << "', '";
			cout << info[4] << "', '" << info[5] << "');\n";
		}
		else if (info.size() == 7) {
			cout << "INSERT INTO `Main_Fruits`(`Name`, `NumImages`, `Name_in_db`, `Link`, `Img1`, `Img2`, `Img3`) VALUES (";
			cout << "'" << info[0] << "', " << 3 << ", '" << info[2] << "', '" << info[3] << "', '";
			cout << info[4] << "', '" << info[5] << "', '" << info[6] << "');\n";
		}
		else {			// size = 8
			cout << "INSERT INTO `Main_Fruits`(`Name`, `NumImages`, `Name_in_db`, `Link`, `Img1`, `Img2`, `Img3`, `Img4`) VALUES (";
			cout << "'" << info[0] << "', " << 4 << ", '" << info[2] << "', '" << info[3] << "', '";
			cout << info[4] << "', '" << info[5] << "', '" << info[6] << "', '" << info[7] << "');\n";
		}
		*/
		
		cout << "\"" << info[0] << "\",\n";
	}	

  return 0;
}
