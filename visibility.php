<script>
console.log(x); // undefined (hoisted)
var x = 5;
var x = 10; // Re-declaration is fine
console.log(x); // 10

</script>

<script>
    // console.log(y); // ReferenceError: Cannot access 'y' before initialization
let y = 5;
// let y = 10; // Error: Identifier 'y' has already been declared
y = 10; // Re-assignment is fine
console.log(y); // 10
</script>