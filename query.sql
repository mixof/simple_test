select ns.title, count(na.author_id) as 'authors count'
from news_authors na
join authors a
on a.id=na.author_id
join news ns
on ns.id=na.news_id
group by 1
HAVING count(na.author_id)<3