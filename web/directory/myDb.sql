CREATE TABLE public."Client"
(
    id serial NOT NULL,
    first_name character varying(20) NOT NULL,
    last_name character varying(20) NOT NULL,
    phone_number character varying(10),
    notes character varying(500),
    PRIMARY KEY (id),
    CONSTRAINT "id constraint" UNIQUE (id)
);

ALTER TABLE public."Client"
    OWNER to fpanseptxtdyod;

COMMENT ON CONSTRAINT "id constraint" ON public."Client"
    IS 'User Ids must be different';

CREATE TABLE public."Lashes"
(
    id serial NOT NULL,
    style character varying(8) NOT NULL,
    shape character varying(6),
    length integer,
    curl "char",
    notes character varying(100),
    CONSTRAINT "id constraint" PRIMARY KEY (id),
    CONSTRAINT "id constraint" UNIQUE (id)
);

ALTER TABLE public."Lashes"
    OWNER to fpanseptxtdyod;

COMMENT ON CONSTRAINT "id constraint" ON public."Lashes"
    IS 'lash ids must be different';

    CREATE TABLE public."Tack"
(
    id serial NOT NULL,
    term character varying(2),
    PRIMARY KEY (id),
    CONSTRAINT "term constraint" UNIQUE (term)
);

ALTER TABLE public."Tack"
    OWNER to fpanseptxtdyod;

COMMENT ON TABLE public."Tack"
    IS 'School Track';

COMMENT ON CONSTRAINT "term constraint" ON public."Tack"
    IS 'terms must be different';

    CREATE TABLE public.pricing_plan
(
    id serial NOT NULL,
    plan integer NOT NULL,
    price integer NOT NULL,
    PRIMARY KEY (id)
);

ALTER TABLE public.pricing_plan
    OWNER to fpanseptxtdyod;

ALTER TABLE public."Client"
    ADD COLUMN "lashID" serial NOT NULL;

ALTER TABLE public."Client"
    ADD COLUMN "trackID" serial NOT NULL;

ALTER TABLE public."Client"
    ADD COLUMN "pricing_planID" serial NOT NULL;
ALTER TABLE public."Client"
    ADD CONSTRAINT "foreign_key lashID" FOREIGN KEY ("lashID")
    REFERENCES public."Lashes" (id)
    ON UPDATE NO ACTION
    ON DELETE SET NULL
    NOT VALID;
CREATE INDEX "fki_foreign_key lashID"
    ON public."Client"("lashID");

    ALTER TABLE public."Client"
    ADD CONSTRAINT "foreign_key trackID" FOREIGN KEY ("trackID")
    REFERENCES public."Tack" (id)
    ON UPDATE NO ACTION
    ON DELETE NO ACTION
    NOT VALID;
CREATE INDEX "fki_foreign_key trackID"
    ON public."Client"("trackID");

    ALTER TABLE public."Client"
    ADD CONSTRAINT "fkey_pricing_planID" FOREIGN KEY ("pricing_planID")
    REFERENCES public.pricing_plan (id)
    ON UPDATE NO ACTION
    ON DELETE NO ACTION
    NOT VALID;
CREATE INDEX "fki_fkey_pricing_planID"
    ON public."Client"("pricing_planID");