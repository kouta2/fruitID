#include <bits/stdc++.h>
using namespace std;

vector< string > links;
vector< string > names;

int main() {
	string line;
	
	while ( getline(cin, line) ) {
		line.erase( 0, line.find('"') + 1 );
		links.push_back( line.substr(0, line.find('"')) );
		line.erase( 0, line.find('>') + 1 );
		names.push_back( line.substr(0, line.find('<')) );
	}
	
	for ( int i = 0; i < links.size() - 1; ++i ) 
		cout << "\"" << links[i] << "\",\n";
	cout << "\"" << links[links.size() - 1] << "\"\n";	
	cout << "\n";
	
	for ( int i = 0; i < names.size() - 1; ++i ) 
		cout << "\"" << names[i] << "\",\n";
	cout << "\"" << names[names.size() - 1] << "\"\n";	
		
	return 0;
}
