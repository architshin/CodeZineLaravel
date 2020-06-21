-- CodeZine 「人気のPHPフレームワークLaravelを習得しよう」連載 サポートファイル
-- 
-- テーブル作成、データ登録SQLファイル
-- fldbデータベース、flusrユーザで使用
-- コマンド: mysql -u flusr --default-character-set=utf8 -p fldb < "/…/dbinit-user.sql"
-- 
-- @author Shinzo SAITO

-- empテーブル削除
DROP TABLE IF EXISTS emps;

-- ordersテーブル削除
DROP TABLE IF EXISTS depts;

-- deptテーブル作成
CREATE TABLE depts (
	id INTEGER AUTO_INCREMENT, 
	dp_no INT(2) NOT NULL, 
	dp_name TEXT NOT NULL, 
	dp_loc TEXT,
	PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- empテーブル作成
CREATE TABLE emps (
	id INTEGER AUTO_INCREMENT, 
	em_no INT(4) NOT NULL, 
	em_name TEXT NOT NULL, 
	em_job TEXT NOT NULL, 
	em_mgr INT(4) NOT NULL, 
	em_hiredate DATE NOT NULL, 
	em_sal INTEGER NOT NULL, 
	dept_id INTEGER NOT NULL,
	PRIMARY KEY(id), 
	FOREIGN KEY(dept_id) REFERENCES depts(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- deptデータ登録
INSERT INTO depts (dp_no, dp_name, dp_loc) VALUES (10,'会計','大阪');
INSERT INTO depts (dp_no, dp_name, dp_loc) VALUES (20,'調査','京都');
INSERT INTO depts (dp_no, dp_name, dp_loc) VALUES (30,'営業','東京');
INSERT INTO depts (dp_no, dp_name, dp_loc) VALUES (40,'総務','島根');

-- empデータ登録
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7369,'SMITH','CLERK',7902,'1980-12-17',800,2);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7499,'ALLEN','SALESMAN',7698,'1981-02-20',1600,3);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7521,'WARD','SALESMAN',7698,'1981-02-22',1250,3);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7566,'JONES','MANAGER',7839,'1981-04-02',2975,2);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7654,'MARTIN','SALESMAN',7698,'1981-09-28',1250,3);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7698,'BLAKE','MANAGER',7839,'1981-05-01',2850,3);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7782,'CLARK','MANAGER',7839,'1981-06-09',2450,1);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7788,'SCOTT','ANALYST',7566,'1987-04-19',3000,2);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7839,'KING','PRESIDENT',0,'1981-11-17',5000,1);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7844,'TURNER','SALESMAN',7698,'1981-09-08',1500,3);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7876,'ADAMS','CLERK',7788,'1987-05-23',1100,2);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7900,'JAMES','CLERK',7698,'1981-12-03',950,3);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7902,'FORD','ANALYST',7566,'1981-12-03',3000,2);
INSERT INTO emps (em_no, em_name, em_job, em_mgr, em_hiredate, em_sal, dept_id) VALUES (7934,'MILLER','CLERK',7782,'1982-01-23',1300,1);
