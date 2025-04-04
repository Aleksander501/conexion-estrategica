<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Conexión Estratégica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSEhMWFhUXFRgWGBcVGBYXFxUWFRUXFxcWGBYYHSggGBolIBgVITEiJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGy0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKABOwMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQMEBQYHAgj/xABDEAACAAQDBAcFBgQFAwUAAAABAgADBBESITEFBkFRBxMiYXGBkRQyobHBQlKCktHwI2Jy4SRTY6LCFTOyFkNzg/H/xAAZAQACAwEAAAAAAAAAAAAAAAABAgADBAX/xAAnEQACAgICAgICAgMBAAAAAAAAAQIRAxIhMQQTIlFB8BQyYXGBQv/aAAwDAQACEQMRAD8A3GBDP2o8oP2kw2rF2Q7gQ19oMD2gwNWHZDqBDT2kx17QYlE2Q5gQ29oMD2gxKJYpUaQhI94QcyaTHCmxvBXQr7H0CGvtBgGoMChth1AiNq9pCWrO7KqqLljkAIou0ulqUjFZUszAL2cnAreA1t5QHwRcmmQIx2Z0zTAw/wAPLtlcGYQ3fY4bfCLzuvvjKrpZeVkVsHRveUnTxHfEXIXwWmOJ3umGoqz3QGnki0NqxdkctHDNbPkYPFHE0XGRERugUPBWL3+kH7WvfEThYcYNb84iSJbJb2pYHtKxGi/ODsecHUmxI+0rA9pWI6x5wVjzgak2JEz1gps4EWiPz5wRvzg6g2FjCyNDSSTbOFgYJBfFB3hIGDvEIKXgXjiBAId3g7xxBxAnUHHMHAIHBwUCIE49lHM/CD9mHM/CF4ES2ChH2cczBGmHMwvAMSyUICmHMwfs45mFoK8S2QT9mHMwfsw5mGO8O2ko5DTnztkqjVmOg+vgIxDavSBXzHZuvaWDokuyqo5X1v3mBsOo2b1MkW4mG80nhrePPmzekCtpnBE5pi3zSaSwI8TmD4RuG623pW0KdZ8rLOzKdUYag/rBUgSg0THsrcxHJpX5iHwgjE2BqjKek6smGYlIt3JXFhUasQSLjUgAX84zmv3drLD/AA0z8saVSzy+3KknMouEHgoAX6WEWqfWSySBMW41AIJHlGec3ZqxY00YJL3Lq3sTKIvwP7ygbOqKjZlUrjECCMS6B0+6eY1jZdobUkS7B5qgnQE5nwHGKB0kS1mSkqZZBCtgYjk2l/MfGEjkdjzwxUeDZ6KUZstJqOCrqrqbaqwBHzhV6Zha7D0iK6MZ+PZdKeUsp+RmQfKJHb9SVwqNTn8gPiY0uVKzGo2cnEL4bGETV4rrbC/AHMN4fpBK9lHCGNYbi+IAjO/KM7yM1xwoQFccRByIOfd3iJGlqsWR17uI5iIGpn9ZaYLY1OFwM7i17+YzH9oOgrirjuN/1HgfrAjOmVzgWlTHUSikEAjjnHVo12Z9SKgWiVgRNgakQYIwttOaqkFiBlxIENw4OhB8IOwKOpByhUQy2e18X9Rh6sEh2Igd6t7JFChMw3fKyD3je+fhlrE+BGPbf2YlZt0y5gJlS1Fwbi9lvbwuwhZOlYYq3Q2n9L1W2Pq5CYbmxszYRfK9jb/9if3O6V5c5xIrFEqYxsrgfwzfQNc3U9+nhFmSlky1wJLRVtawUARDbf3dp6qWUKKGA7LAAFTw8u6KPe/o1PxuOzQRBxU+jOqmPQqs43eU7yieNpbWF/K0WuLzKdQIKDiEDg4KDiBFYECBAICAYEEYhACAYAjlzaCAy/pGn+1bSpdn4ystEafNtqR93xyH5jEPvbu3JnljSEB1XOWQVBA4qSLQlsmqWp3grS+mB5ankqMqG3ksWik2fSSDOaW7XIKkszEXI0F+IjLOXyOhhh8TB6qSythIIYZWPP6iLh0T70mjq1luf4U5llv/ACsTZW9T6ExZKvdyinC5uHA1zz789YzHbtMJE9lUns5g94zgxnbFyYmkeuhAYw2pJ2JEbmoPqBCxEaDEUmp3fEvaU6ePcqJJB1ycYA1/EC/rEWNzbVCuZxH8owgkC5IsFFh+gi+7Ql5XGozinV6uWZjLaZ2bZOqBbnUkkHhwvGbLHk3ePK0Re2d3kmTr9YUz7IBIGWeRBBvDfbmxx7K0nN7leOZ7Q4/UwnLRwx7GIk3LdYDY9+Xyix7uUnWzcLklQpJztpb9YpintRoyNRVstO69EKakkyQLBEGXK/at3nPWIvfNmLSFTVpig/0hrt8IssuXFW3xmBGD3tgaUL8sUxcXwIjXlSUTnYm3Mrm8Wz6t6hSiS8GI9rFNxAWFjlle98rZWGZ4Ot4tkuyogsTYYg17E5Xy9YsM2oYtYWAAuSdIrj1M0zAGny3y4WuSD7wGLIai2cZZUdDHFkDQyKuVfrFlhAcurUqRnlcccvrEsk8HC40OXgeHobjwtEm8zGM4q1LVKs805zBxfhIwn5MsLfIs8aSNY2DU45CX1Awny0+FokYrW6bHAynUG/rr8QfWLAVPCN0OYo58uGKxD7w7aFOth7507hziRJIBJ0GcY5vVvHimvMv9qw7uX77oXJLVDY47MG8dbMZiWcs3K+Q7u890QlPtGfLdWDsLH3VNgOcKbPnNM0GJj7o1zvm57hoOZvFs2Pu/hGKbYufPWMu1M0qFotm7teJ0oMNb2bxtr5xLrFG3Mn9XUzafhb4phI/2t8IvKxtxS2jZiyx1lQoIpVVThqyoqJYzMqWinvBcN8h6RdRFdrKIy5jvnZyLcgBwHLUxMt0Pgrbkquztm1JnlprnB/WWvlyIAHlyhCZIqBUYgTg0yZgdfu6GJCt2phLATAHvkpzJHHL6w1oK7G2HGGbjbhyjG/s6XFFr3PCp1yDVphm93bVfqDFliD3doyuKYftBQPAXz/fKJsRsheqs5eStnQcdCOYOGEDg4KDiBFYF4jusPMwfWHnB1BsP8UAtDIOecE0zviaksfCE6jSGfWnnB9Z3waBZ5yptpij2vMmOex101H/pZmF/I2PrGqytn4ZbEFpiPZgoJsut7FdQcjGPdI8rDtGqH+qT+dVb6xad0NoThSIFmNYAgDW1iecY8tR5Ojgk29f+k1V0+FjMclRwQkkKBqbnO5+kZJtus6+omTBfCWso7hZb+dove3prdU7uxORtfn4RnciwdQdMQv4AwuHm2HyH0j13srsyZY5IB6CHRcRHbMrJbIpQ4rgEWNwbjuh2C174DG3g5wUyYLxVq2csssGFx9ItsvPVAPGKzvTT4GxH3XJz79bGKc/Rf4/ZWJlSlzhUC8TW59Wqzhiv2wUHj72f5TFdMoXsgFycsOpPcIuG7+yOqAd/ftp92/zMZsSblwaszWvJbA0UnfS7JMtz+S/rb0iyrMKm9rxD7dkkqxItfL82Uacy+PBjxP5cjDZFbJrJauQha1iGAJlzLdoZ6H6Ec4aVWyJOLtBH8VWI7dOjJlzSBa4lnL74x3/29UfxQ4nYlNoxt8HRhJodyyqCwACjQDhGb7EqTOraiYdHnTVXuwrhHwQekX91yjO92HCu18ik4X78TsrfFgPOBETIzaNyM1LH7oHjFqip7jTDhZTqAD9ItgjZi/ojFk/syM3nqOrpJ78pZ+OX1jz5IpHramXJSwJLzCTwCki/y9Y3jfpSaGeB9z4Ahj8AYwvcarEvaMrF9uVMQeJ7f/ExXm7LcNFvoNymkzVcztLWAAsByEP9t7EmTZ4Kziirbsj5m8PHx9YzEXW1lbGVw89BfzhlMEwsuHOxzfESAMuzYgX/ALRR+LNiiMaR+p2rKGL3yL/illPoI1BIwt9qiZtgFTcJOlpf+jCG/wB2MeUbokavH6o5/kVdiohntgfwzbXWFp08KL+UJO98v3aNOjaM6lTKRUz0CsGa2Z0teBsuWrsoU8Rn4w73q2cqL1uQF8wSBmeV/lBbApWssw2sQCoUgix0JIyPlGf0y2qjZ7/h2XiWgUADQC0dQwotpq+TZEMV7riH4IOkX00ZLsODgoOAQMQIKBECKdQvIQOoXkI7DQd4UYT6heUA068hCkHeJZBBpCDMgRh+/W/s+ZPmS6Ob1clBhUoBic8WxEXAve1uAEaD0s7a9nomRWwvOOAc8Azfyt2fxRhUkhlvzgxVgZF1kx5pMyaxdza7MSSeGZPlGj9G9PjpfB2Hlr9Yz+emR8f1jVeiaVala/8Amv6ZRnzLijZhfN/4K10pHqgkocRiPgP7/KM2CkxofSnOD1jKDfAqqfEi5HxEVndXYEytqZdLKuCx7bgXEuWB2nbwGl9SQOMNjjqqEyyUnZObgzdrteTs2ZNwj3vc6pPFpgIXwGZ5Ru+6tJXS5d6+pWdMa1lSWirL59tQC58h9YkNi7Jk0klKeQgSWgsBxJ4sx4sdSYc308Cf38YuM1HXHwyhptQy2Uy3AfED2D3cTytcQ5XSIXeOcUAwFVdri7AnIWvYAj5w+OG0qFnLVWhvsWhppbFZVutAuQWxMAfu30HPjziWtw493D+8VbdvZis7TW7TXIDZgjgQM8otyyAq2EHJCMZVEkZuStiLOEGZsIgdp1fWsqJnc4Ra9rnIm/dE5UU6TFsRbwNoq21qmpxmVJldRlYOM2w/ynRfn4QqwPJxYfao8j8yZdOQiWKspFxbN0Nnvbjc+VrcIjq0XOkFu/uyZAOJiQzYiL6Ppj8SMjzy5CJmfR2NrRn8nDrK10afHyqSp9kCy5RWNm7sf4mfOXNGNiveQrXHmAYv0+iFsoOtw0ssBExuTewNr82Y2NtIXx8O0uRs+TWIN1ZqhsNxjGRHMHPL98It5jMJEuux9c3VMpucGCzgHPAGBFwNBe8WvZW05pAxKynirHEB52jV/HcVwZHlTO9/ZtqKYOLWT82R+F4wuVTiVtCkLZLiI9Qy/WNW6S5k96XFKC4EOKaL2bDkCwvqAC2WsZFvJMv1UwHNWt4H3oyZE1KmacbWtmpzq5pYKOgdeB/WILerbTSKOa8oBHtZTyLGwIHPOJTd+sFTIV+NrHxGsVLpMDWSUAbe+fLSM3N0am/i6KnuHJJny2P2pqC/HNszHpOadOUedtjEU8xCR/28LEc2JBI+Q840CX0tUzMFaTOQcWOBgp8Abkd8b/Hkm2YM8WkjRZ/ujxHzjmdlZhw+IOsMdkbbkVWIyJqzAoW4Gq3zFwcxofSJFo2WZaKnvxs56gpn/ClWmFOE3PO/EZAgeJiE3B2w5eZLbOU15kuwsJZuR1Qy0tbzB5xZt7qiZLkl5S4iouynO6KwLDzFx5xTN1qpKZkmibippzNcWuZEyY18DcVFzrplE4tDU2jSZVPr4384UlMR2gSIV0hrUTLMBzb5AGGXIj4JSiqCcm1+cO4hJLEEHjr4CJoGKckaZZB2g4ECCiscWBEHcRWxTp/mt6wOoT/Nb1iz1r7KvY/osmIc4BmDmIg12ZLZL9Y3vAXxfCEZ2ypIPvubHMYtfC0VyUV2yyLk+kZ/02VwafJk/dlFu442sfPsj4RnNEOz6/MxqG8nR8KkvOkzmVmYkLNHZysAAfeGmucZjU00ymmvInCzoeGjA6Mp4iBCcXwh5QkuWiV2Duw9bMcKwARQxv3kgD4GNO2Ls9Nn08xyexLQub8Sq3Y/LzMV/oenhnqRxwyvS8yFul7bGBEpEP8A3O3M7kU9lfNrn8MO8UW9mKs0knFGW7QqTNd5rnNmLHxY3Maj0A7OAFVUm92KSgOACguT49pfSMfm1IOZ90ad55xv3QrQlNmLNa4M+Y823JQRLW3kgPnCsiLzOmWglmXz5wnNa/hHNLpbkTAGFmeK5vNLxgZ5cCNVYcR3xPzTFMTaQJIJ7LE6/ZN878v356vGjbsz5nxQtuRNbrJqNYFQG7rk2BHcde4giLY00ggHyPA/oYid2ZIUTG5lRfuFzb4xI1EvI2078/MQMlObDD+obDO4jubLDjvGhiPoao42lvrbEO8Xsc/SJCWbeELJNMK5OZYuLGGFQxVghzU+63FTyP8AKfh8pJhneG9UtyICp8PoNtcoZGZxGo58/wC30hLZ1H2SzkszMSSdc4kJlMLwsEygQShGkGcnN2IdVwgBM/3pC8NqmZhlu/HCSPIG0MmIJyXDra1wb3B0a+otyzjC99dnezzp1PphYPLvo0tsxn3A28UMblss/wANfCM86aaGyyKlRexaQ5A4MC6EnuKuPxxVnhfX4LcM67/JBdGO2cEwyGPZYYl7iuo9PlFs6QJIMpdMzr5iMg2XWmVMSav2GDWHEA5jzFx5xru88sTPZMOct3Rg3AowxAjx+kYc8a5NuCV8GXVky7leJNz46qPQD4RH1UnIN3kHvBz/AFi4dJ+xxS1aMoss1FmfiQYGt6KfxRTXqSchpnfxP6RZjg01RVOaadlh6O94PY6xSxtKc4JnIA+634Tn4ExvLzY8uasRwy+Qjdtz9sGopJbMe2owN34cgfPKNsOeDLJCm+PWMqdS4WYhLKp/9zKxW3HK+UUXrlY9fToA6i1RTNoy3zZRy+IPxse/eFwg6wy3uplNoMdiQCeF+EU+bUtMIYfw62Wc7CwnKNTbnzHH4Q8u/wB/bBHr9/aNk2XWibIlTBcBkVs9RcDIwUmcJk17Z4LKPEi5/wCPpEBsLbANHLmMAmRuvBbEg68Id7u1ZwtMOkxrpfLsDIse7X4QZSUVbBHHKbpE+2UStKbovhEUjBgG4HSJGga6eZhZ8okVTHMFeBBRSOQP/SX/AM4fl/vA/wCjv/nD8v8AeJUGDEXeyRT64jSgo3QgNMDLiuRbuyhrvrt2VR0zTXHGygWuzHQDxiXEULpklE0SuL2lzlYjuKsgJ82EVT+RdjaiyP3O6RkqG6irUSZl+w17o4+6SdG4Z6/CLHt/YFFVBTPALAHCQSGAOvaXhGCI19eXLKx5c4vO5VFiQzGmT8RyXC7FVUfynI+kY80FD5I24ZPJ8WXfYG61JRu0yQ7gsuE4nJBF76GGO+G6lNUJOnMWab1RwdshbopKiw1z4HnBhqpfdImjk6lW9Rl8I5nVj27cll8Mx8Iq/kTot/jQsxicyqLgAZfvWPUe7NB1FHTSTrLkS1PDtBBiPrePNNLs7rK+XTWOF6lJdrfYaaBmD/KY9VzDG+7MFU6G00w0pJnbmC981y4jL+whxUXHD0zMUOQtSu0KmoRexhlyiHbCCqjEWXvuxGYz5wHKhoxsvNS2Rz4Rn20ZJVi4B/1AOI4MBzHdqPKLaZ/XS2CL2yCFNipJOXH1vHdVu62AYXBcDO+QJ427o1+PkjFcszZoSb6C3QfFIJBv27DwwqR84lml55ekRG6VH1UuamYPXMSOCkquQ7uPnElUIWyJI8DYGFnzNhj/AFRFbRqFkzZd2F2bABn9rhcZagaxJSniL2nQnAbdojtLfUMpxDPxEKyq0YdcsIN/GGatC9MkmmQmJgJ74ivaidI6mMbBhrC6hslppFjnwguvGgiKlz8Wpz74OW/YBHG394mpLJEvENvRWYad7ccKD/7GVL/7oVaoMQe9s0tTEr9mZLJ8FmKT+vlBS5AT+xjeWD5eWloab77L9poaiSFu3Vl0A+/L7aDzKgecK7vTQZSW/dhEyIE+xonlSW/EaGNz6J6lKyg6mZm1NMKqTmQjdtPLNl/DGR7/AOyfYq6dJAsjHrZf/wAcy5AHcpxL+GLP0I7aWTUT0mOqq8tSMTBQWRiAM+NnPpGeSTVMuTadotvTtSj2emm2zSaZd+50Jt6yxGLq2Ua3007XlzaWVJlujv14YqrAlVEuYMRzyzI9Yx9Zb6BSToAMyT3AaxEAJT2z5fKNP6ItoIGmyZhGYDrfibgN/wAYz2RsCsY3WkqM/wDRmD4kRK7K2ZW005HNPNlm+EGYrBLt2QGYZDWDGSsji6Nv2lsKkqVtNlq4FjqRawsPdMRVRupRNNRmlzGKDsgF+GhLj6mImk2vOQhJ0ppdzhD5FSQL5EemcTM3aMwWs+vAga+ItGmvso/0PJuw6UjBMBCG5wFrKL6i4z+MSCy5WQUArkLA3sF08u6IanrnY2cjPQgH0zJhRqkrwhZJPseLa6JRp2EgDQ8+GekTVF7gitSZwYC2cWmWtgByAhZvgiXJ1BQIKKxh3hHKBhEHAhQgtDLa+zkqJTyXF1dSp8CId2g7wQHmbfbc6o2czFu1Kbsy3B8TYjnrEVsLe6okKEVFYcySI1fp7rwZNPTDVnMxuYVVKD1LH8sY6kkCElCM+yyOSUOjTtzNp11eHYBJaIQMV2YliL2Ay0FvWIvpENfS4CJ4wPcXVcwy52zJ1B+Bi+dH1B1FHLW2bXdvFv7WENOkyg6+imWF2l2mr+H3v9paHXjQS6EflZG+zK+juqZtsUjzmLkzrEm3vFGCnyOGPTjzbR5Q2DWCRV0845CXPlOT/KsxS3wvHqeewvcnT0ELVDXZ1hxZaRGVWzSivhOIs+Jss7X0HPh6Q6afllHSPfjEaTGUmhtsJ1YtMB904ACLWIzOR01HxiZxRGzZDHNSAePI+PGEHrWQ2Zbg2s18j3dx8YEY6qiSezslAABlCbwhSVQYHIix+cCpqVHH5/pF0eeiqXAlUTLaZxn9FtEhZiMfdmsg7xLJX0v8ou1VXrguThBNhl7x5DO54cIp+xd3QbvUI3Ws7OyksoDOxYjCTpnyh5T9a5RMePd8EhQz8rxLU7aiOF2WvDLwhWXRkZ4oVZ4saWCSDVxkSCCDqDaEVbsSx/KDDhntYBhfwvCBkHLMZAD0EH34/sX0T+htOmRWKytM0dShzmM2I8FQe8T8vOLNOoGb7QHleEtkblIim84vjYliFw9m+SamwHxhZZVJfDseOLV/PoQ2PVlJQIHZJwIBqQDYWHM2JvyIix7Nms0sFrXub53AzOXfbSEH2FLF+2+llthGAclyjttnILWCmwsMaobDjwveFxRl/wCmPmnBr4rkzjp12f2KaptfCzSWyv74xr/4N6xkiP4RvvSZSdZsuoUCxRVmADMAS3VmI5dkN6x56D98SfDKo8oddb5eEdy6plIZTZlIZSNQQbg+sNDMXvgYxwhLGPS1HtMTJaNf3kVvzKD9Yrddt5BOSXNM+lmEjCWs0qbn7uLtIbjkQc4z7ZO/kxVEmoRXk4RL7GJXVQLA65nwsYmaLaU0zlkJMSspZi4x1nvybHLGwzDA2sTme6xjKoS2o2eyOt2XKdUYrjGCOTdoeUJgIRYsfoIrdfsSfNUpJmukwAMMzZuBU8op06lns+Ca01Jl7A4mMtjyIGkdHZrhnO1XaNNafgIXFcnMcxbUn1EO1nu4y+MQu5mx2RC024dtVZi2G19L5gHW0WeTKCk5WMSg2S+72xiLTXa4IBCjIeJiyQz2Y38JPCHcVhAYKAYKIQewIKBAIHBEQIBiEPNnSLtJ520pxmBlwN1aqwIIRMly5HNvxRB0FRJE5RNcKLgknQeJj0fvjQUrSJs6okS5nVyna7orEYVJyJEeTcBvnrxgWHs9GUO+OzlUKKyTkLe8B84Qrt8KAgj2uSQQQRiv8BGBXW2YP78Y5dwbWyAFs/Hui32sT1ok9sypImusmYJkvVSLjsngbi9xpF82d0uTAirUSDMZQBiR8OKwtiKkZN+8oyx3JN9PCCLNzip0yxWj0judvxJ2gWSVKmq0tQ7KwXQmw7QNjn8oskzbCjIob9+UecNwt5Z9BNmTZWBsSqrS5gNnAJIIIIwsM+fvHKNOoOkWjqOzOvTzOUz3L9z6etoV3XAya/JfW2mrakjwvb5Rz7Wh+3cd4isVMjrUxSZxHJpbAg+NsjEetbWSkKkS5rXOF27N+4hRY/CDCMpK0STimaBQy1F8ItcXNvH+8I7QXEyoNLZxA7s7TnNMXrAovcWW9rkZa99hExV14VziFmsQLZgn6RZikV5InDT7P2QBhyBtc+V9Id9di94Z8xqIipM/CL68hzMPJTYuOcXNJ9iJtdDLa1ZOkgsq40/lHaHivHyv4RWK7fAgHszPDq3v8RE3t7aoRxKGZGb9xOi/X0iMNdf7I845XkSSnUWdTx03C5IhaHfGS7WmF5bf6ilR+bT4xZqfaakXDXHjrEdNRHHaloR32hiNnylvgAQn7pI+Ghiqy+r7LUKm+jRzJ2s0mYpY3lsQrX4XyDDkR8vKKwk11+1iHof0vElIVG44vGxt+GLsKblaKM2qVMu1RNFvet3H9YbvVqMiyg24kfKK89SS2IkkWsOOnjxhnO25SLcvMwWBJxK1gBxOWUdK+ODmalg2vOTqJ3WEBOpmYidAuA4vK148y0FHMm5S0ZyALhQSRfTIRpe/u+0kyHpKZxN6xQGdT2EUm5A5sQLZaA84HQnR3FS/fLX0DE/+QiibssSoz2fsqfLQzHkzFQEAsylRcmw1hmG5CPR+82xRUUk6V95DbuYZqfUCPOZSxsRY6GFQS59Gux5FVMmrORWZVVkDE2IuQ2QOeqxpabPlyxhloqDiqgAfCMJkzXTtIzI3BlJU+o8ok5G+NWhzcP8A1qDfzFotUkkK0a9KnBXCm1rGx9Mo7NKhOJSIof8A6lUSJM+ZJfFMxreUQqLha1iWBzNvnEVX71TDYyQZXAktja98iDYDS2VoPsQNTW7IR2mUEaEER1LbMAjHfQrmT5CMJqNqz5txMmuwvoTYZ9wsDF46FtqS5dW0pnAMyWVQcCwIaw4A2B9IG4KNs2fLwS1XkPnnDqElMKXgEAY5gzHMQI/gQIEAgIECBEIU/pVmEbNqbG38O3kWUGPNDMf5T4GPTnSdSmZs2qAzPUs35e19I8ukrxHpACgOwjpbnQLCBI4fGDQj73oIlhHNjzUQ3mN33g3IGnqYSYxGREns4BVu+QbMcctOHnD2bR4kLoQVGuYIHleGyXWWFsh0bF9rMWw58Ib1U4uxYm7MbkxAWLSA8vtIzyyeKMym/fY8raxb6zb85AssNl1aOGmPMZnxIGLZMLC972I5RRVnuBbEbd+d/WJGfWU0xUMxZ/WLLRCUMoIcC4b5i/CFaCh7UbeqQ3Wy58yWVYEKkxiA6kXIDE3z4G48os9B0ms4/wARIxTOctsIY/0tofO0ZvPdcX8MEL/OQT8Mof7rqz1lMmuOolKRa9wZgB17iYKsJ6HGyj961u7j6wyZ3S4ve3E/pFlqWsuXGIOfKN40JIqtlXmSZhYk5km5J1JOphaVRuftW8hEu9LnHcqWYq9EL6LvfOuyOlbJY5lj9PhCybIXK4uQSRfnEpLYaWsY6B18T8zFqxxS4RU8kn2yJGzgOHP46x3QUgVy3GJQpeOeqsYFE2Mo6UTOp6xWlzZiLMlKRgdlGJWZTkDywesUuv2pOnC02Yzi987Znm1h2j3m8bN0jbrPWypTSrdZKLa3F0YZi443VfjGTVu7VXKNmkN4rZvlnFUux0QojaOhWRhpZj/fnMR4Kqr8wYyqg2DUznCJJe54urKo7yzCN83S2UtNIlyV0UZnmxN2bzJJiuTGSJ+aOyfCPOm9+zjJqpi8CxYeZ/WPRtsoqO9m5cuszJKuPdYAG1+Y4iAnyQwiG04ZmNbn9FsuTS1E2ZNeZMWTMZAowqGVSQbXJY5c7RkF4exSdoa2nemWRUTJqGXMd16tA+MOBkbsALEfGGe0Z8iyinE7UlmnYLnSwVUyHHUnWI2DvAoJ0WvrDjZta0ibLnJ70t1ccLlSDbztbzhreADBAeuNmVqzpUucvuzEVx4MAfrD0GKJ0RV5m7Mk3NzLLyvAI5wj8pWLurRYhDsxzeATHN4hD//Z') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #ffffff !important; 
            text-decoration: underline;
        }
        .navbar-brand img {
            height: 60px; 
        }
        .nav-item {
            padding: 0 15px;
        }
        .navbar-nav .nav-link {
            transition: transform 0.3s ease-in-out;
        }
        .navbar-nav .nav-link:hover {
            transform: scale(1.1);
        }

        /* 🔥 Estilo para la opción activa en el menú */
        .navbar-nav .nav-link.active {
            background-color: #ffffff33; /* Color de fondo para resaltar */
            border-radius: 8px;
            color: yellow !important;
        }

        /* Añadir un poco de padding a los elementos */
        .nav-item {
            padding: 0 15px;
        }

        /* Agregar una animación suave */
        .navbar-nav .nav-link {
            transition: transform 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            transform: scale(1.1);
        }
        .hero-overlay {
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .hero-text {
            position: relative;
            z-index: 2;
            font-size: 2rem;
            font-weight: bold;
        }
        .navbar-brand img {
            height: 60px; /* Ajusta este valor según lo que consideres adecuado */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="inicio.php"><img src="Logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="inicio.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="equipo.php">Equipo</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-text">
            <h1>Asesorando, Conectando, Impulsando</h1>
        </div>
    </section>

    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2025 Conexión Estratégica. Todos los derechos reservados.</p>
    </footer>

    <!-- 🚀 Script para activar la opción del menú actual -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const currentPage = window.location.pathname.split("/").pop(); // Obtiene el nombre del archivo actual
            document.querySelectorAll(".navbar-nav .nav-link").forEach(link => {
                if (link.getAttribute("href") === currentPage) {
                    link.classList.add("active"); // Aplica la clase 'active' automáticamente
                }
            });
        });
    </script>
</body>
</html>
