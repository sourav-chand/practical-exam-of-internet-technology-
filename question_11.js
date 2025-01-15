// Create a student object with properties
const student = {
    name: "John Smith",
    age: 20,
    grades: [85, 92, 78, 90, 88],
    
    // Method to calculate average grade
    calculateAverage: function() {
        const sum = this.grades.reduce((acc, grade) => acc + grade, 0);
        const average = sum / this.grades.length;
        return average;
    },
    
    // Method to display student info and average
    displayInfo: function() {
        const avgGrade = this.calculateAverage();
        console.log(`Student: ${this.name}`);
        console.log(`Age: ${this.age}`);
        console.log(`Grades: ${this.grades.join(', ')}`);
        console.log(`Average Grade: ${avgGrade.toFixed(2)}`);
    }
};

// Test the object and methods
student.displayInfo();