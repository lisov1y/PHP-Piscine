SELECT count(*) AS 'movies' FROM member_history WHERE ((date(date) < date('2007-07-27')) AND (date(date) > date('2006-10-30'))) OR ((month(date(date)) = 12) AND (day(date(date)) = 24));