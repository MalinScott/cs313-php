CREATE TABLE weather (
   city varchar(80),
   temp_lo int,
   -- low temperature
   temp_hi int,
   -- high temperature
   prcp real,
   -- precipitation
   date date
);

CREATE TABLE (
   name varchar(80),
   location point
);


SELECT DISTINCT temp_lo
    FROM weather;