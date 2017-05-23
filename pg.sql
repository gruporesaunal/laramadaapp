CREATE TABLE public.year_maps
(
  id SERIAL PRIMARY KEY,
  year integer NOT NULL,
  iframe character varying(1000) NOT NULL,
  description character varying(200) DEFAULT NULL::character varying,
  pollutant_id integer NOT NULL,
  FOREIGN KEY (pollutant_id) REFERENCES pollutants(id)
)

CREATE TABLE public.pollutants
(
  id SERIAL PRIMARY KEY,
  name character varying(45) NOT NULL UNIQUE,
  description text DEFAULT NULL::character varying,
  type_id integer NOT NULL,
  FOREIGN KEY (type_id) REFERENCES types(id)

  
)

INSERT INTO pollutants (name, type_id) VALUES ('Acetaminofen', 1);
INSERT INTO pollutants (name, type_id) VALUES ('Losartan', 1);
INSERT INTO pollutants (name, type_id) VALUES ('Ciprofloxacin',2);

INSERT INTO year_maps (year, iframe, pollutant_id) VALUES (2000,'<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.723178215048786&amp;lng=-74.16729712945556&amp;t=1&amp;z=13&amp;l=col2&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>', 1);
INSERT INTO year_maps(year, iframe, pollutant_id) VALUES (2001,'<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.68949098430204&amp;lng=-74.22396684152221&amp;t=1&amp;z=13&amp;l=col2&amp;y=6&amp;tmplt=6&amp;hml=KML"></iframe>', 1);
INSERT INTO year_maps (year, iframe, pollutant_id) VALUES (2000,'<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.723178215048786&amp;lng=-74.16729712945556&amp;t=1&amp;z=13&amp;l=col2&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>', 2);
INSERT INTO year_maps (year, iframe, pollutant_id) VALUES (2002,'<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.723178215048786&amp;lng=-74.16729712945556&amp;t=1&amp;z=13&amp;l=col2&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>', 3);
