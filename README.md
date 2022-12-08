# OOP PHP

## Lập trình hướng đối tượng (OOP)

* OOP viết tắt của Object-Oriented Programming – Lập trình hướng đối tượng ra đời giải quyết các vấn đề mà lập trình truyền thống gặp phải. OOP có hai thuật ngữ rất quan trọng là lớp (class) và đối tượng (object). Class là định nghĩa chung cho một vật, để dễ tưởng tượng bạn có thể nghĩ đến class là một bản thiết kế trong khi đó đối tượng là một thực hiện cụ thể của bản thiết kế. Ví dụ, object là một ngôi nhà cụ thể thì class là bản thiết kế ngôi nhà đó. Lập trình hướng đối tượng là cách bạn thiết kế các class và sau đó thực hiện chúng thành các đối tượng trong chương trình khi cần.

* Lập trình hướng đối tượng có 4 tính chất chính:

    * Tính trừu tượng (abstraction).
    * Tính kế thừa (inheritance).
    * Tính đóng gói (encapsulation).
    * Tính đa hình (polymorphism).

* Ưu điểm của OOP:

    * Dễ dàng quản lý code khi có sự thay đổi chương trình.
    * Dễ mở rộng dự án.
    * Tiết kiệm được tài nguyên đáng kể cho hệ thống.
    * Có tính bảo mật cao.
    * Có tính tái sử dụng cao.

## Class trong php

* Class là một khuôn mẫu đại diện cho một thực thể trong thế giới thực và nó định nghĩa các thuộc tính và phương thức của thực thể.

* **VD:**
```php
<?php
class Question {
    private $stt;
    private $title;
    private $content;
    private $answer;

    public function __construct($stt, $title, $content, $answer)
    {
        $this->stt = $stt;
        $this->title = $title;
        $this->content = $content;
        $this->answer = $answer;
    }

    public function getTitle() {
        return $this->title;
    }
 
    public function setTitle($title) {
        $this->title = $title;
    }

    public function t_s() {
        return "<b>" . $this->stt . "." . $this->title . "? </b>" . $this->content . " " . $this->answer;
    }
}
?>
```

* **Phương thức khởi tạo ( __construct ):** Phương thức khởi tạo này nghĩa là một phương thức mà nó sẽ được tự động thực thi khi chúng ta tạo ra một đối tượng mới, và các tham số trong phương thức này chúng ta có thể truyền nó vào ngay lúc tạo ra đối tượng

* **Hàm hủy ( __destruct() ):** Khi tạo hàm này trong class, hàm sẽ tự động gọi khi đối tượng bị hủy hoặc kết thúc kịch bản.

* **set và get trong PHP:** set là thiết lập và get là lấy ra. Như vậy hai phương thức này giúp ta can thiệp vào quá trình thiết lập giá trị và lấy giá trị của một thuộc tính nào đó trong lớp. Trường hợp thuộc tính là private như vậy ta không thể sử dụng nó ở ngoài lớp được, nhưng vẫn sử dụng được nó thì đòi hỏi ta phải truy xuất thông qua một function trung gian, và function trung gian này ta gọi là set và get.

## Object trong php

* Trong lập trình hướng đối tượng, đối tượng được hiểu như là 1 thực thể: người, vật hoặc 1 bảng dữ liệu, . . .
* Một đối tượng bao gồm 2 thông tin: thuộc tính và phương thức:
    * Thuộc tính chính là những thông tin, đặc điểm của đối tượng. Ví dụ: một người sẽ có họ tên, ngày sinh, màu da, kiểu tóc, . . .
    * Phương thức là những thao tác, hành động mà đối tượng đó có thể thực hiện. Ví dụ: một người sẽ có thể thực hiện hành động nói, đi, ăn, uống, . . .

```php
<?php
    $q1 = new Question("stt 1", "cau 1", "abc", "123");
    $q2 = new Question("stt 2", "cau 2", "xyz", "456");
    $q3 = new Question("stt 3", "cau 3", "ijk", "789");
?>
```

## Sự khác nhau giữa đối tượng và lớp:
* Lớp là một khuôn mẫu còn đối tượng là một thể hiện cụ thể dựa trên khuôn mẫu đó.

## Các tính chất của lập trình hướng đối tượng

### Tính trừu tượng (abstraction)

* Trừu tượng hóa là quá trình đơn giản hóa một đối tượng mà trong đó chỉ bao gồm những đặc điểm quan tâm và bỏ qua những đặc điểm chi tiết nhỏ. Quá trình trừu tượng hóa dữ liệu giúp ta xác định được những thuộc tính, hành động nào của đối tượng cần thiết sử dụng cho chương trình.

* **Abstract class:** Abstract sẽ định nghĩa các phương thức (hàm) mà từ đó các lớp con sẽ kế thừa nó và Overwrite lại. Đối với lớp này thì nó sẽ có các điểm khác sau:

    * Các phương thức khi được khai báo là abstract thì chỉ được định nghĩa chứ không được phép viết code xử lý trong phương thức.
    * Trong abstract class nếu không phải là phương thức abstract thì vẫn khai báo và viết code được như bình thường.
    * Phương thức abstract chỉ có thể khai báo trong abstract class.
    * Các thuộc tính trong abstract class thì không được khai báo là abstract.
    * Không thể khởi tạo một abstract class.
    * Vì không thể khởi tạo được abstract class nên các phương thức được khai báo là abstract chỉ được khai báo ở mức độ protected và public.
    * Các lớp kế thừa một abstract class phải định nghĩa lại tất cả các phương thức trong abstract class đó ( nếu không sẽ bị lỗi).

```php
<?php
abstract class ConNguoi
{
    protected $name = "cao văn sơn";
    
    abstract public function getName();

    public function getHeight()
    {
        return 123;
    }
}
?>
```

* **Interface:** là một khuôn mẫu, giúp cho chúng ta tạo ra bộ khung cho một hoặc nhiều đối tượng và nhìn vào interface thì chúng ta hoàn toàn có thể xác định được các phương thức và các thuộc tính cố định (hay còn gọi là hằng) sẽ có trong đối tượng implement nó.

    * Interface không phải là một đối tượng.
    * Trong interface chúng ta chỉ được khai báo phương thức chứ không được định nghĩa chúng.
    * Trong interface chúng ta có thể khai báo được hằng nhưng không thể khai báo biến.
    * Một interface không thể khởi tạo được (vì nó không phải là một đối tượng).
    * Các lớp implement interface thì phải khai báo và định nghĩa lại các phương thức có trong interface đó.
    * Một class có thể implements nhiều interface.
    * Các interface có thể kế thừa lẫn nhau.

```php
interface Collection
{
    public function all();
    
    public function filter($arr, $value);

    public function first();

    public function last();
    
    public function map($arr);

    public function pluck();

    public function push($value);

    public function add($value);
    
    public function sortBy($type = "DESC");
}
```

### Tính kế thừa (inheritance)

* Tính kế thừa trong lập trình hướng đối tượng cho phép một lớp (class) có thể kế thừa các thuộc tính và phương thức từ các lớp khác đã được định nghĩa. Lớp được kế thừa còn được gọi là lớp cha và lớp kế thừa được gọi là lớp con. Điều này cho phép các đối tượng có thể tái sử dụng hay mở rộng các đặc tính sẵn có mà không phải tiến hành định nghĩa lại.

```php
class QuestionsList  implements Collection {
    private $listsQuestion = [];
    
    public function __construct($listsQuestion = [])
    {
        $this->listsQuestion = $listsQuestion;
    }
}
```

### Tính đóng gói (encapsulation)

* Tính đóng gói là tính chất không cho phép người dùng hay đối tượng khác thay đổi dữ liệu thành viên của đối tượng nội tại. Chỉ có các hàm thành viên của đối tượng đó mới có quyền thay đổi trạng thái nội tại của nó mà thôi. Các đối tượng khác muốn thay đổi thuộc tính thành viên của đối tượng nội tại, thì chúng cần truyền thông điệp cho đối tượng, và việc quyết định thay đổi hay không vẫn do đối tượng nội tại quyết định. Trong PHP việc đóng gói được thực hiện nhờ sử dụng các từ khoá **public**, **private** và **protected**:

    * **Private** là giới hạn hẹp nhất của thuộc tính và phương thức trong hướng đối tượng. Khi các thuộc tính và phương thức khai báo với giới hạn này thì các thuộc tính phương thức đó chỉ có thể sử dụng được trong class đó, bên ngoài class không thể nào có thể sử dụng được nó kể cả lớp kế thừa nó cũng không sử dụng được, nếu muốn lấy giá trị hoặc gán giá trị ở bên ngoài class thì chúng ta phải thông qua hai hàm SET và GET.

    * **protected** thì chúng ngoài được sử dụng trong class đó ra thì class con kết thừa từ nó cũng có thể sử dụng được, như bên ngoài class không có thể sử dụng được.

    * **public** Đây là visibility có mức độ truy cập rộng nhất trong hướng đối tượng, khi một thuộc tính hay phương thức sử dụng visibility này thì chúng ta có thể tác động vào thuộc tính hay phương thức đó từ cả trong lẫn ngoài class.

### Tính đa hình (polymorphism)

* Là sự đa hình của mỗi hành động cụ thể ở những đối tượng khác nhau. Ví dụ hành động ăn ở các loài động vật hoàn toàn khác nhau như: con heo ăn cám, hổ ăn thịt, con người thì ... ăn hết =)). Đó là sự đa hình trong thực tế, còn đa hình trong lập trình thì được hiểu là Lớp Con sẽ viết lại những phương thức ở lớp cha (ovewrite)


## magic method trong PHP

* **__construct():** Hàm được gọi khi ta khởi tạo một đối tượng. Trong PHP, hàm khởi tạo không cho phép chúng ta thực hiện việc overload, nó chỉ cho phép khởi tạo 1 đối tượng duy nhất ứng với method __contructs() được khai báo trong class(không khai báo mặc định là không truyền gì)
* **__destruct():** Được gọi khi một đối tượng bị hủy. Mặc định khi kết thúc chương trình hoặc khi ta khai báo mới đối tượng đó sẽ bị hủy bỏ và gọi đến method __destruct()
* **__set():** Gọi khi ta truyền dữ liệu vào thuộc tính không tồn tại hoặc thuộc tính private trong đối tượng. Nó truyền dưới dạng key => value.
* **__get():** Gọi khi ta truy cập vào thuộc tính không tồn tại hoặc thuộc tính private trong đối tượng.
* **__isset():** Sẽ được gọi khi chúng ta thực hiện kiểm tra một thuộc tính không được phép truy cập của một đối tượng, hay kiểm tra một thuộc tính không tồn tại trong đối tượng đó. Cụ thể là hàm isset() và hàm empty().
* **__unset():** Được gọi khi hàm unset() được sử dụng trong một thuộc tính không được phép truy cập. Tương tự như hàm isset. Khi ta Unset 1 thuộc tính không tồn tại thì method __unset() sẽ được gọi.
* **__call():** Được gọi khi ta gọi một phương thức không được phép truy cập trong phạm vi của một đối tượng.
* **__callstatic():** Được kích hoạt khi ta gọi một phương thức không được phép truy cập trong phạm vi của một phương thức tĩnh.
* **__toString():** Phương thức này được gọi khi chúng ta in echo đối tượng
* **__invoke():** Phương thức này được gọi khi ta cố gắng gọi một đối tượng như một hàm.
* **__Sleep():** Được gọi khi serialize() một đối tượng. Thông thường khi chúng ta serialize() một đối tượng thì nó sẽ trả về tất cả các thuộc tính trong đối tượng đó.
* **__wakeup():** Được gọi khi unserialize() đối tượng.
* **__set_state():** Được sử dụng khi chúng ta var_export một object.
* **__clone():** Được sử dụng khi chúng ta clone(sao chép 1 đối tượng thành 1 đối tượng hoàn toàn mới không liên quan đến đối tượng cũ) một object.
* **__debugInfo():** Được gọi khi chúng ta sử dụng hàm vardump().

# SOLID

* SOLID là viết tắt của 5 chữ cái đầu trong 5 nguyên tắc thiết kế hướng đối tượng. Giúp cho lập trình viên viết ra những đoạn code dễ đọc, dễ hiểu, dễ maintain.

* **Single responsibility priciple (SRP)** : Mỗi lớp chỉ nên chịu trách nhiệm về một nhiệm vụ cụ thể nào đó mà thôi.
* **Open/Closed principle (OCP)** : Không được sửa đổi một Class có sẵn, nhưng có thể mở rộng bằng kế thừa.
* **Liskov substitution principe (LSP)** : Các đối tượng (instance) kiểu class con có thể thay thế các đối tượng kiểu class cha mà không gây ra lỗi.
* **Interface segregation principle (ISP)** : Thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ, với nhiều mục đích cụ thể.
* **Dependency inversion principle (DIP)** : Các module cấp cao không nên phụ thuộc vào các modules cấp thấp. Cả 2 nên phụ thuộc vào abstraction.

# Functional Programming

* **Functional Programming** : là “lập trình hàm” hay còn được gọi là “lập trình chức năng”. Đây là một phương pháp xây dựng phần mềm bằng cách tạo ra các chức năng, dựa trên các hàm toán học.

```php
<?php
function criteria_greater_than($min) {
    return function($item) use ($min) {
        return $item > $min;
    };
}

$arr = array(1, 2, 3, 4, 5, 6);
$output = array_filter($arr, criteria_greater_than(3));

print_r($output); // items > 3 => Array ( [3] => 4 [4] => 5 [5] => 6 )
?>
```

## Ưu điểm

- Nó cho phép bạn tránh được các vấn đề khó hiểu và lỗi trong mã.
- Người dùng dễ dàng thực hiện kiểm thử nói chung, đặc biệt là kiểm thử đơn vị (Unit testing) và gỡ lỗi mã (debug).
- Ứng dụng xử lý song song và đồng thời.
- Hỗ trợ triển khai mã nóng và khả năng chịu lỗi tốt.
- Cung cấp mô-đun tốt hơn đối với những đoạn mã ngắn.
- Tăng hiệu suất cho nhà phát triển.
- Hỗ trợ các hàm lồng nhau.
- Hỗ trợ các cấu trúc dữ liệu hàm như Lazy Map (Bản đồ lười), Danh sách (List),...
- Cho phép sử dụng hiệu quả Phép tính Lambda.

## Nhược điểm

- Mô hình Functional Programming không dễ nên rất khó hiểu đối với người mới bắt đầu.
- Functional Programming khó bảo trì vì có nhiều đối tượng phát triển trong quá trình viết mã.
- Yêu cầu nhiều ở quá trình bắt chước (mocking) và khởi tạo môi trường.
- Việc tái sử dụng mã rất phức tạp và cần cấu trúc lại mã liên tục.
- Các đối tượng có thể không đại diện chính xác cho vấn đề cần xử lý.

# call_user_function

* là một hàm sẵn có trong PHP được sử dụng để gọi hàm gọi lại được cung cấp bởi tham số đầu tiên và chuyển các tham số còn lại làm đối số.

# __autoload

* Là một magic function, muốn sử dụng nó bạn định nghĩa nó, tức là bạn phải viết 1 function có tên là __autoload, nhận tham số là tên class muốn load.

```php
<?php
function __autoload($classname) {
    $filename = __DIR__ . '/oop/' . $classname . '.php';
    include $filename;
}
$question = new Question;
$conn = new DBConnection;
?>
```
# spl_autoload_register

* spl_autoload_register() cho phép chúng ta đăng ký nhiều hàm autoload. Nó sẽ gọi các hàm autoload theo thứ tự đăng ký. PHP sẽ tạo 1 queue và thực hiện lần lượt theo thứ tự hàm callback được định nghĩa trong lời gọi hàm spl_autoload_register() cho đến khi nó tìm được class, và nếu sau khi chạy qua tất cả autoload mà không tìm thấy class thì sẽ có exception class not found.

```php
<?php
spl_autoload_register(function ($classname)  {
    $filename = __DIR__ . '/oop/' . $classname . '.php';
    include $filename;
});

$question = new Question;
$conn = new DBConnection;
?>
```