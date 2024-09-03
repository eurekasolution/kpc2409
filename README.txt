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

    w3schools.com
    

    ChatGPT를 이용한 버전 강의자료 다운로드 

    http://naver.me/FUhhy7AA

    참고사이트 : https://www.security.org/how-secure-is-my-password/ 

    void copy_array(char *str)
    {
        char buf[100];
        strcpy(buf, str);
        printf("buf = %s\n", buf);
        printf("&buf = %p\n", buf);
    }

    int main(int argc, char **argv)
    {
        copy_array(argv[1]);
        return 0;
    }

    // 실행 : ./test "hello world"

for()
    main.php?cmd=login&id=test&pass=aaa

https://www.daum.net/

<input type="xxx">
xxx : text (default)
password : ******
tel :
number :
email : 
url : 

<form method="post" action="다음페이지">
    ID <input type="text" name="id">
    PW <input type="password" name="pass">
    <button type="submit">로그인</button>
</form>

헤더 : 다음페이지
몸체
id=test&pass=1234

