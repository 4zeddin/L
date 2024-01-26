void main() {
  Person p1 = Person();
  p1.addData("John", "Male", 22);
  p1.showData();
}

class Person {
  String? name, sex;
  int? age;

  // Constructors are not explicitly defined, so Dart will provide a default one.

  // Method to add data to the Person object
  void addData(String name, String sex, int age) {
    this.name = name;
    this.sex = sex;
    this.age = age;
  }

  // Method to display the data
  void showData() {
    print("$name, $sex, $age");
  }
}
