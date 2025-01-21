<!-- 8. Create a simple stack implementation using a PHP array (push, pop, display). -->
<?php
class Stack {
    private $stack = array();
    
    public function push($item) {
        array_push($this->stack, $item);
    }
    
    public function pop() {
        if (!empty($this->stack)) {
            return array_pop($this->stack);
        }
        return null;
    }
    
    public function display() {
        if (!empty($this->stack)) {
            echo "Stack: " . implode(', ', $this->stack) . "\n";
        } else {
            echo "Stack is empty\n";
        }
    }
}

// Example usage
$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->display();
echo "Popped: " . $stack->pop() . "\n";
$stack->display();
?>