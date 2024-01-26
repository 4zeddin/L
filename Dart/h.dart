import 'dart:io';

void main() {
  print("x:");
  var x = stdin.readLineSync();
  var y = int.parse(x ?? "0") + 10 ;
  print("$x + 10 = $y");
}
