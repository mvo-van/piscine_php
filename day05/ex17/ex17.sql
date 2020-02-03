SELECT COUNT(id_sub) AS nb_susc, 
ROUND(AVG(price - 0.5)) AS av_susc, 
SUM(duration_sub) % 42 AS ft 
FROM subscription;