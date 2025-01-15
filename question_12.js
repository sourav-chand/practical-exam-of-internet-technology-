// Function that demonstrates different error handling scenarios
function errorHandlingDemo() {
    // Example 1: Handling a reference error
    try {
        console.log("Example 1: Trying to access undefined variable");
        console.log(undefinedVariable); // This will cause an error
    } catch (error) {
        console.error("Error caught:", error.message);
    }

    // Example 2: Handling a type error
    try {
        console.log("\nExample 2: Trying to call a non-function");
        const number = 42;
        number(); // This will cause an error
    } catch (error) {
        console.error("Error caught:", error.message);
    }

    // Example 3: Using finally clause
    try {
        console.log("\nExample 3: Using throw and finally");
        throw new Error("Custom error message");
    } catch (error) {
        console.error("Error caught:", error.message);
    } finally {
        console.log("This will always execute, regardless of errors");
    }
}

// Run the demonstration
errorHandlingDemo();