README.txt 파일을 수시로 확인하세요.
    github 실시간 배포 주소.

    https://github.com/eurekasolution/kpc2409

    http://localhost:8000

    DB
    DB, User : kpc
    pass : 1111

    http://localhost:8000/phpmyadmin

    데이터베이스의 문자셋 변경 (한글깨짐) latin으로 된 경우

    ALTER DATABASE kpc CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

    create table users (
        idx integer auto_increment primary key,
        id  varchar(30) UNIQUE,
        name varchar(30),
        pass varchar(100)
    );

    insert into users (id, name, pass) values('test', '테스트', 'abcd');
    insert into users (id, name, pass) values('admin', '관리자', 'abcd');


    안녕하세요?
    <script>
        for(var i=1; i<=5; i++)
        {
            alert(i);
        }
    </script>

    insert into bbs (name, content) values('홍길동', '' )