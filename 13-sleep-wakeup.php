<?php
//Функция serialize() проверяет, присутствует ли в вашем классе метод с магическим именем __sleep(). Если это так, то этот метод выполняется до любой операции сериализации. Он может очистить объект и должен возвращать массив с именами всех переменных этого объекта, которые должны быть сериализованы. Если метод ничего не возвращает, то сериализуется NULL и выдается предупреждение E_NOTICE.
//
//Предполагаемое использование __sleep() состоит в завершении работы над данными, ждущими обработки или других подобных задач очистки. Кроме того, этот метод может полезен, когда есть очень большие объекты, которые нет необходимости полностью сохранять.
//
//С другой стороны, функция unserialize() проверяет наличие метода с магическим именем __wakeup(). Если она имеется, эта функция может восстанавливать любые ресурсы, которые может иметь объект.
//
//Предполагаемое использование __wakeup() заключается в восстановлении любых соединений с базой данных, которые могли быть потеряны во время операции сериализации и выполнения других операций повторной инициализации.

class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __sleep()
    {
        return array('dsn', 'username', 'password');
    }

    public function __wakeup()
    {
        $this->connect();
    }
}?>