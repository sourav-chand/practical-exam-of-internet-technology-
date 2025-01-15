<?php
class Stack {
    private $stack;
    private $limit;

    // Initialize empty stack
    public function __construct($limit = 10) {
        $this->stack = array();
        $this->limit = $limit;
    }

    // Push element onto stack
    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $item);
            return true;
        }
        return false;
    }

    // Pop element from stack
    public function pop() {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        }
        return null;
    }

    // Check if stack is empty
    public function isEmpty() {
        return empty($this->stack);
    }

    // Display stack contents
    public function display() {
        if ($this->isEmpty()) {
            echo "Stack is empty\n";
            return;
        }
        echo "Stack contents:\n";
        foreach (array_reverse($this->stack) as $item) {
            echo $item . "\n";
        }
    }
}

// Example usage
$stack = new Stack(5);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->display();
echo "Popped: " . $stack->pop() . "\n";
$stack->display();
?>