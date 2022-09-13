@extends('layout.app')

@section('title-block')ITSports @endsection

@section('content')
<section>
    <div class="task-header dark">
        <p>1 <span>PHP</span> ВЫВЕСТИ ЦИФРЫ ПО ПОРЯДКУ</p>
    </div>
    <div class=code>
    <pre>
            <code class="language-php">$arrayNumber = [
    [0,1,2,3,4,5,6,7,8,9,10]
];</code>
        </pre>
    </div>
    <div class="answer">
        <p>Массив можно вывести разными способами, например перебрав циклом или преобразовав в строку через implode(). В данном случае массив уже отсортирован, иначе можно было бы воспользоваться функцией sort()</p>
    </div>
    <div class=code>
    <pre>
            <code class="language-php">echo implode(", ", $array[0]);</code>
        </pre>
    </div>
</section>
<section>
    <div class="task-header dark">
        <p>2 <span>MySQL</span> Написать запрос для выборки данных из таблицы, где id = 10</p>
    </div>
    <div class=code>
    <pre>
            <code class="language-sql">SELECT * FROM TableName WHERE id=1;</code>
        </pre>
    </div>
</section>
<section>
    <div class="task-header dark">
        <p>3 <span>PHP</span> Вывести ключи и значение массива</p>
    </div>
    <div class=code>
    <pre>
            <code class="language-php">$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Petrovsk',
    'telephone' => '8 (985) 222-33-44'
];</code>
        </pre>
        <pre>
        <code class="language-php">foreach ($arrayInfo as $key => $value) {
    echo $key . ' => ' . $value . '&lt;br&gt';
}</code>
        </pre>
    </div>
</section>
<section>
    <div class="task-header dark">
        <p>4 <span>PHP</span> Вывести месяцы года</p>
    </div>
    <div class=code>
    <pre>
            <code class="language-php">$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март'
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
];</code>
        </pre>
        <div class=code>
    <pre>
            <code class="language-php">foreach ($arrayMonth as $value) {
    echo implode(", ", $value);
    echo ", ";
}</code>
        </pre>
    </div>
</section>
<section>
    <div class="task-header dark">
        <p>5 <span>PHP</span> Дана информация в json формате, надо вывести её</p>
    </div>
    <div class="answer">
        <p>Для работы с JSON данными их удобно преобразовать в объект или массив с помощью функции json_decode(). Чтобы вывести данные преобразуем их в массив</p>
    </div>
    <div class=code>
    <pre>
            <code class="language-php">$json='{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
,2009,2010]}';
$array = json_decode($json, true);
print_r($array);</code>
        </pre>
    </div>

</section>
<section>
    <div class="task-header dark">
        <p>6 <span>PHP</span> и <span>MySQL</span> Дан код, нужно ответить на вопросы аргументировав
свой ответ</p>
    </div>
    <div class=code>
    <pre>
            <code class="language-php">$hostname = 'localhost';
$username = 'root';
$password = '123';
$database = 'data';

$conn = mysqli_connect($hostname, $database, $username, $password);
$sql = "SELECT * FROM users";
$resultSet = mysqli_query($conn, $sql);</code>
        </pre>
    </div>
    <div class="question">
        <p>1) Будет ли выполнен запрос?</p>
        <p>2) Что сделает запрос?</p>
        <p>3) Написать запрос для удаления данных, где id пользователей равен
одной из данных цифр = 1,2,3,4,5</p>
    </div>
    <div class="answer">
        <p>1. В mysqli_connect() не верный порядок аргументов, соединение с сервером MySQL не будет установлено. Верный порядок: mysqli_connect($hostname, $username, $password, $database)</p><br>
        <p>2. Если соединение установено и в БД есть таблица users, запрос вернет все записи из этой таблицы</p><br>
        <p>3. Задать условие можно разными способами, например через оператор IN, так как в нашем случае id идут по порядку, воспользуемся оператором BETWEEN</p>
    </div>
    <div class=code>
    <pre>
    <code class="language-sql">DELETE FROM contacts WHERE id BETWEEN 1 AND 5</code>
        </pre>
    </div>
</section>
<section>
    <div class="task-header dark">
        <p>7 <span>PHP</span> и <span>HTML</span> Написать форму с одним полей для вода текста и
кнопкой, по нажатию которой идёт сохранения данных из поля в файл</p>
    </div>

    <p>Массив можно вывести разными способами, например перебрав циклом или преобразовав в строку через implode(). В данном случае массив уже отсортирован, иначе можно было бы воспользоваться функцией sort()</p>
</section>
@endsection


