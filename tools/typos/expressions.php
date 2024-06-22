<?php

#De acordo com as configurações do AWB na Wikipédia em Português#
#Na forma em que estavam em 00h48min de 07 de outubro de 2023#

$expressions = array(
  "/\b(S|s)uiç(a|o)\b/",
  "/\bbra(?:zã|sa)o\b/",
  "/\b([Ee])xcavaç(ão|ões)\b/",
  "/\b([Ee])xcavar\b/",
  "/\b([Ee])xcavad(a|o|as|os)\b/",
  "/\b([Oo])rganic([oa])\b/",
  "/\bà princípio\b/",
  "/\breferencias\b/",
  "/(como|em) referencia\b/",
  "/\breferencia (ao?|à)\b/",
  "/\b([Ll])ingações\b/",
  "/\bque cuj([ao]s?)\b/",
  "/\bcuj([ao])s? mesm[ao]s\b/",
  "/\bcuj([ao])s? mesmo\b/",
  "/\bcuj([ao])s? quais\b/",
  "/\bcuj([ao])s? qual\b/",
  "/\b([Cc])uj([ao])s? (?:sua|seu)(s?)\b/",
  "/\b([Cc])uj(?:a|as)? o(s?)\b/",
  "/\b([Cc])uj(?:o|os)? a(s?)\b/",
  "/\b([Cc])uj[ao]s? ([ao]s?)\b/",
  "/\b(d[aeo]|n[ao]) radio\b/",
  "/\b([Aa])nimacão\b/",
  "/\b([Cc])o-[Cc]atedral\b/",
  "/\bda desta\b/",
  "/\bdo deste\b/",
  "/\b(M|m)al\b(\s|-)\b(C|c)ar[aáà](c?)ter\b/",
  "/\b([Pp])or causa que\b/",
  "/\b([Ff])olha de ([Ss])ão ([Pp])aulo\b/",
  "/\b([Rr])eestréia(s?)\b/",
  "/\b([Ee])stréia(s?)\b/",
  "/\b([Tt])érmina(r|m|)\b/",
  "/\bmini-?s[eé]rie\b/",
  "/\bportugues\b/",
  "/\bhora(s?)aula\b/",
  "/\b([Ss])ubsesp(?:[eé])ci[e@](s?)\b/",
  "/\b([Ss])ub-esp(?:[eé])ci[e@](s?)\b/",
  "/\b([Vv])(?:c|o(?:[çc]e|çê))([^a-záàâãçéêíóôõúü])/",
  "/\b([Vv])iuv[a@](s?)\b/",
  "/\b([Vv])itori[a@](s?)\b/",
  "/\b([Vv])(?:ír[oú]|irú|ir[uo])s\b/",
  "/\b([Vv])e(se|zi)s\b/",
  "/\b([Vv])ari([oa]s)\b/",
  "/\b([Vv])áris([oa])\b/",
  "/\bunic([ao]s?)\b/",
  "/\bUnic([ao]s?)\b/",
  "/\bultim([ao]s?)\b/",
  "/\bUltim([ao]s?)\b/",
  "/\b([Tt])r(?:[eê]z|es)\b/",
  "/\b([Tt])ra[ns]form(a(?:r|ç(?:ão|ões)|d[ao])|ou)\b/",
  "/\b([Tt])(?:(?:bm?|(?:[áe]mb[eé]|ambe|a?bé)m)\b|ambé([^a-záàâãçéêíóôõúü\-]))/",
  "/\b([Ii]ns|[Ss])u(?:[cs]{2}ess?|ces|çess?|ss?eç)o(s?)\b/",
  "/\b([Pp])ro(?:sce(?:ss?|ç)|ce[sç])o(s?)\b/",
  "/\b([Pp])r(?:(?:incí|ínci)pal|incip(?:la|a(?:le)?))men?te\b/",
  "/\b([Pp])reten(?:ç|ss)ão\b/",
  "/\b(im|)([Pp])oss?iv[eé](l|is)\b/",
  "/\b([Pp])er(?:io|[ií]u)do(s?)\b/",
  "/\b([Pp])ara(?:is|[ií]z)o(s?)\b/",
  "/\b([Oo])bs(?:eç|sess)(ão|ões)\b/",
  "/\b([Oo])brigatori([ao]s?)\b/",
  "/\b([Nn])onag(?:e|[ée]s)sim([oa])\b/",
  "/\b([Nn])eo[- ]zeland(ês|esa)\b/",
  "/\b([Mm])etere?o(logia|lógico)\b/",
  "/\b([Ll])(?:[íi]nguí|íngu[íi])sta(s?)\b/",
  "/\b([Ll])icen[cs]a(s?)\b/",
  "/\b[ií]pslon\b/",
  "/\b[IÍ]pslon\b/",
  "/\b([Ll])endari([ao]s?)\b/",
  "/\b([Ii])nv(?:éz|e[sz])\b/",
  "/\b([Gg])raca(s?)\b/",
  "/\b([Ff])lôr(es|s)\b/",
  "/\b([Ff])lôr((?:es)?)\b/",
  "/\b([Ee])spec?tativa(s?)\b/",
  "/\b([Ee])xep?to\b/",
  "/\b([Ee])(?:exeç|xcess)[ãa]o\b/",
  "/\b([Ee])cessões\b/",
  "/\b([Ee])r(?:rup|upi)ção\b/",
  "/\b([Ee])ntreta(?:t|nd)o\b/",
  "/\b(in|)([Dd])(?:[ei]|ei)sponive(l|is)\b/",
  "/\b([Dd])ign([ia]ta|atá)ri([oa]s?)\b/",
  "/\b([Dd])ificil\b/",
  "/\b([Dd])e[cs]embro\b/",
  "/\b([Cc])r(eaçã|ia[cç]a)o\b/",
  "/\b([Ii]nc|[Cc])ompreen(?:ss|ç)(ão|ões)\b/",
  "/\b([Cc])e(?:r[ée]|le)bro(s?)\b/",
  "/\bºc\b/",
  "/\bºf\b/",
  "/\bà cargo\b/",
  "/\bà el([ae]s?)\b/",
  "/\bà meu\b/",
  "/\bà mim\b/",
  "/(\s)a a(\s)/",
  "/\baçoes\b/",
  "/\bacessorio(s?)\b/",
  "/\baçucar\b/",
  "/\bacustico(s?)\b/",
  "/\badmnistra(ção|r)\b/",
  "/\badolescencia\b/",
  "/\bafrica\b/",
  "/\bagencia\b/",
  "/\baleatori([ao]s?)\b/",
  "/\bamargúri?a\b/",
  "/\banglofon([ao]s?)\b/",
  "/\banti aéreo\b/",
  "/\banti depressivo\b/",
  "/\banti-vírus\b/",
  "/\banuncio\b/",
  "/\baplicaçao\b/",
  "/\baki\b/",
  "/\baracajú\b/",
  "/\bareas\b/",
  "/\baristocratic([ao]s?)\b/",
  "/\bartistica(s?)\b/",
  "/\bazas\b/",
  "/\bascençao\b/",
  "/\basia\b/",
  "/\basiatica\b/",
  "/\basim\b/",
  "/\bassistencia\b/",
  "/\bassocição\b/",
  "/\bateismo\b/",
  "/\bater(iss?|ri[sz]a)agem\b/",
  "/\bac?tris\b/",
  "/\bautentic([ao]s?)\b/",
  "/\bauto-biografia(s?)\b/",
  "/\bautopsia\b/",
  "/\bautoretrato\b/",
  "/\bavia(?:c[aã]|sã)o\b/",
  "/\bavogrado\b/",
  "/\bavulsso\b/",
  "/\bazaléia\b/",
  "/\bbandeija\b/",
  "/\bbébé\b/",
  "/\b([Bb])e(?:ig|j)e(s?)\b/",
  "/\bbe(?:m |n)vindo\b/",
  "/\bbençãos\b/",
  "/\bbeneficio(s?)\b/",
  "/\bbertold brecht\b/",
  "/\bbi-campeão\b/",
  "/\bbiópsias\b/",
  "/\bboas vindas\b/",
  "/\bbrazil\b/",
  "/\bboeiro\b/",
  "/\bbussula\b/",
  "/\bcadaço\b/",
  "/\bcalsado\b/",
  "/\bcam([ae])ra\b/",
  "/\bcaminhoes\b/",
  "/\bcamioes\b/",
  "/\bcampiao\b/",
  "/\bcampioes\b/",
  "/\bcampionatos\b/",
  "/\bcan(?:ça|sã)o\b/",
  "/\bcaracteristico(s?)\b/",
  "/\bcarissimo\b/",
  "/\bcazamento\b/",
  "/\bcaz(ar(?:am?)?|ou)\b/",
  "/\bxafariz\b/",
  "/\bcientific([ao]s?)\b/",
  "/\bclinica\b/",
  "/\bcôco\b/",
  "/\bcomedia\b/",
  "/\bcomiss?ao\b/",
  "/\bcomis[oõ]es\b/",
  "/\bconcluíndo\b/",
  "/\bconcretisar\b/",
  "/\bcondi(ça|ss[aã])o\b/",
  "/\bcomnosco\b/",
  "/\bconseguírem\b/",
  "/\bconstroi\b/",
  "/\b([Cc])ontru(ção|ir)\b/",
  "/\bconstruia\b/",
  "/\bcontribue\b/",
  "/\bconver(?:ç[aã]|sa|ssã)o\b/",
  "/\bco-protagonista\b/",
  "/\bco - protagonista\b/",
  "/\bcorreiro eletronico\b/",
  "/\bcorriji(r?)am\b/",
  "/\bcorçario\b/",
  "/\bcustuma\b/",
  "/\bcrítíc([ao]s?)\b/",
  "/\bcrueis\b/",
  "/\bculinaria\b/",
  "/\bdefeniçao\b/",
  "/\bdefenido\b/",
  "/\bdemocratica\b/",
  "/\bdeceram\b/",
  "/\bdescubriram\b/",
  "/\bdescubrire\b/",
  "/\bdsenho\b/",
  "/\bdesnecessario\b/",
  "/\bdispenderam\b/",
  "/\bdesprotejid([ao]s?)\b/",
  "/\bdese(ç|ss)eis\b/",
  "/\bdiferencas\b/",
  "/\bdificulidade\b/",
  "/\bdifusao\b/",
  "/\bdijitara\b/",
  "/\bdinamico\b/",
  "/\bdiscursso\b/",
  "/\bdiscuções\b/",
  "/\bdeisponiveis\b/",
  "/\bdistribuid([ao]s?)\b/",
  "/\bdiverssas\b/",
  "/\bdiverssos\b/",
  "/\bdibre\b/",
  "/\bdruídas\b/",
  "/\bduvidas\b/",
  "/\bemaili\b/",
  "/\begipsio\b/",
  "/\begipcios\b/",
  "/\belacção\b/",
  "/\beletroim[aã]\b/",
  "/\bimpresa\b/",
  "/\bempresario(s?)\b/",
  "/\beciclop[eé]dia(s?)\b/",
  "/\bernegia\b/",
  "/\benfases\b/",
  "/\b[ei]ntertido\b/",
  "/\bentreteram\b/",
  "/\beplepsia\b/",
  "/\bequilibrio\b/",
  "/\bepecial\b/",
  "/\bespecialisad([ao]s?)\b/",
  "/\bexpectador\b/",
  "/\besquesita(s?)\b/",
  "/\bextende-se\b/",
  "/\bethanol\b/",
  "/\bect\b/",
  "/\bexcessao\b/",
  "/\bexercicio(s?)\b/",
  "/\bespulsou\b/",
  "/\bestinto(s?)\b/",
  "/\besturquiram\b/",
  "/\besturquiu\b/",
  "/\bfacil\b/",
  "/\bfaser\b/",
  "/\bfecula\b/",
  "/\bfémea\b/",
  "/\bferverosos\b/",
  "/\bfinlandia\b/",
  "/\bfizestes\b/",
  "/\bflôr\b/",
  "/\bflôrs\b/",
  "/\bforão\b/",
  "/\bfotografica\b/",
  "/\bfrageis\b/",
  "/\bfragil\b/",
  "/\bfrankstein\b/",
  "/\bfuneraria(s?)\b/",
  "/\bfuracao\b/",
  "/\bfuracoes\b/",
  "/\bfurá\b/",
  "/\bgalaxia\b/",
  "/\bgenerico(s?)\b/",
  "/\bjeropiga\b/",
  "/\bgiroscopic?o\b/",
  "/\bgorgetas\b/",
  "/\bgrafico(s?)\b/",
  "/\bhà\b/",
  "/\babitual\b/",
  "/\barmonia\b/",
  "/\baste\b/",
  "/\baver\b/",
  "/\belice\b/",
  "/\bheraldic([ao])\b/",
  "/\bheranca\b/",
  "/\bherodoto\b/",
  "/\berói\b/",
  "/\besitaram\b/",
  "/\besitou\b/",
  "/\bhexa-campeão\b/",
  "/\bigiene\b/",
  "/\bigienico\b/",
  "/\biper\b/",
  "/\bipopótamo\b/",
  "/\bhistoria\b/",
  "/\b(hj|oje)\b/",
  "/\bomem\b/",
  "/\borta\b/",
  "/\bhumoristic([ao])\b/",
  "/\bideología\b/",
  "/\bidolo(s?)\b/",
  "/\bingreja\b/",
  "/\biguasu\b/",
  "/\bimenência\b/",
  "/\bimenente\b/",
  "/\bimoveis\b/",
  "/\bimovel\b/",
  "/\bimperio(s?)\b/",
  "/\binclu[ií]em\b/",
  "/\bincluiam\b/",
  "/\bindia\b/",
  "/\bindigena\b/",
  "/\bindiguinação\b/",
  "/\bindiguinado\b/",
  "/\bindiguinar\b/",
  "/\binedito(s?)\b/",
  "/\binfelismente\b/",
  "/\bingenuo\b/",
  "/\bingles\b/",
  "/\binglêses\b/",
  "/\binicio(s?)\b/",
  "/\bispirar\b/",
  "/\bispirou\b/",
  "/\bintrumental\b/",
  "/\bintrumento\b/",
  "/\bintensão\b/",
  "/\binterviste\b/",
  "/\bintervi\b/",
  "/\bintervemos\b/",
  "/\binvens(?:[ií]|sí)vel\b/",
  "/\bbevocar\b/",
  "/\by[oô]ga\b/",
  "/\biorgute\b/",
  "/\birisar\b/",
  "/\bissu\b/",
  "/\bjamelão\b/",
  "/\bjapones\b/",
  "/\bjoana d´arc\b/",
  "/\bjunior\b/",
  "/\bgrau kelvin\b/",
  "/\blargartixa\b/",
  "/\blargarto\b/",
  "/\blison[gj]ea\b/",
  "/\bl(?:o[gj]|ój)ica\b/",
  "/\blógicamente\b/",
  "/\blusofon([ao]s?)\b/",
  "/\bmassiç([ao]s?)\b/",
  "/\bmagic([ao])\b/",
  "/\bpeso molecular\b/",
  "/\bmemoria(s?)\b/",
  "/\bmenas\b/",
  "/\bminerio\b/",
  "/\bminimo\b/",
  "/\bm[ií]ceis\b/",
  "/\bm[ií]cil\b/",
  "/\bmiticas\b/",
  "/\bmui?nto(s?)\b/",
  "/\bmultimidia(s?)\b/",
  "/\bmultimedia(s?)\b/",
  "/\bmulti-?uso\b/",
  "/\bmusico(s?)\b/",
  "/\bnegocios\b/",
  "/\bnostalgico(s?)\b/",
  "/\bnúmerais\b/",
  "/\bnúmeral\b/",
  "/\bolimpico(s?)\b/",
  "/\boptim([ao]s?)\b/",
  "/\botim([ao]s?)\b/",
  "/\botimisadas\b/",
  "/\boxido-redução\b/",
  "/\bpagaos\b/",
  "/\bpagina\b/",
  "/\bpapeis\b/",
  "/\bpara mim fazer\b/",
  "/\bparalização\b/",
  "/\bpaulinia\b/",
  "/\bpedigri\b/",
  "/\bpenta-campeão\b/",
  "/\bpersonalisação\b/",
  "/\bpersonalisar\b/",
  "/\bpersonalisou\b/",
  "/\bpesquiza\b/",
  "/\bpicômetro\b/",
  "/\bplásticamente\b/",
  "/\bpoluicao\b/",
  "/\bpq\? \b/",
  "/\bpermenor\b/",
  "/\bpermenores\b/",
  "/\bpq\b/",
  "/\bportugual\b/",
  "/\bpraca\b/",
  "/\bprescisa\b/",
  "/\bpercursora(s?)\b/",
  "/\bprefêrencias\b/",
  "/\bprestaçãões\b/",
  "/\bprisao\b/",
  "/\bprisoes\b/",
  "/\bprivatizaçao\b/",
  "/\bpob[lr]ema\b/",
  "/\bpross?eço(s?)\b/",
  "/\bproducao\b/",
  "/\bproíbido\b/",
  "/\bproprietario\b/",
  "/\bproposito\b/",
  "/\bprotejid([ao]s?)\b/",
  "/\bprototipo(s?)\b/",
  "/\bpseudo-ciência\b/",
  "/\b(qeu|uqe)\b/",
  "/\bquestao\b/",
  "/\bkilo\b/",
  "/\bradiaçao\b/",
  "/\breibi\b/",
  "/\braíz\b/",
  "/\brarissimo(s?)\b/",
  "/\breinterar\b/",
  "/\breinvidicação\b/",
  "/\brenovaveis\b/",
  "/\brepertorio(s?)\b/",
  "/\breportorio(s?)\b/",
  "/\bretem\b/",
  "/\breuniao\b/",
  "/\breunioes\b/",
  "/\breúso\b/",
  "/\briquissimo(s?)\b/",
  "/\b([Ss])crificio\b/",
  "/\bsaira\b/",
  "/\b([Ss])aude\b/",
  "/\bsecudari([ao]s?)\b/",
  "/\bseissentos\b/",
  "/\bsemi-presidencialismo(s?)\b/",
  "/\bsemi presidencialismos\b/",
  "/\bsemi-presidencialista(s?)\b/",
  "/\bsemi presidencialistas\b/",
  "/\bseparaçoes\b/",
  "/\bserie\b/",
  "/\bserio\b/",
  "/\bsetessentos\b/",
  "/\b([Ss])[ií]nta[xz]e\b/",
  "/\bsombrancelha\b/",
  "/\bsobrevivencia\b/",
  "/\bsubdivisáo\b/",
  "/\b([Ss])uiç([oa])\b/",
  "/\bsuin([oa])\b/",
  "/\bsuspeitu \b/",
  "/\btao\b/",
  "/\btecnic([ao])\b/",
  "/\btêmporo-mandibular\b/",
  "/\btendencia(s?)\b/",
  "/\b(?:tetra-|tratra)hidrofurano\b/",
  "/\btracao\b/",
  "/\btrasnporta\b/",
  "/\btreslagoense\b/",
  "/\btri-campeão\b/",
  "/\btrovao\b/",
  "/\btupí-guarani\b/",
  "/\bu.m.a\b/",
  "/\búmidade\b/",
  "/\bunivercidade(s?)\b/",
  "/\buniversitari([ao]s?)\b/",
  "/\buzad([ao]s?)\b/",
  "/\buzar\b/",
  "/\buzo\b/",
  "/\buzou\b/",
  "/\busuari([oa])\b/",
  "/\butilisador\b/",
  "/\bváriados\b/",
  "/\bverç[oõ]es\b/",
  "/\bvestigio(s?)\b/",
  "/\bves\b/",
  "/\bvideo game\b/",
  "/\bviolencia\b/",
  "/\bwikimapi?a\b/",
  "/\b([Tt])rage(c?)t[oó]ria(s?)\b/",
  "/\b([Ss])emi[- ]presidencialis(mos?|tas?)\b/",
  "/\b([Rr])aiz(es?)\b/",
  "/\b([Ee])(?:exeç|xcess)[oõ]es\b/",
  "/\b[Dd][Vv][Dd]'s\b/",
  "/\b([Cc])ornea(s?)\b/",
  "/\b[Cc][Dd]'s\b/",
  "/\b([Aa])utoretrato(s?)\b/",
  "/\b([Aa])uto-biogr[aá]fi(as?)\b/",
  "/\b([Aa])uto-biogr[aá]fi(c[ao]s?)\b/",
  "/\b([Bb])i-campeão/",
  "/\b([Hh])exa-campeão/",
  "/\b([Pp])enta-campeão/",
  "/\b([Tt])ri-campeão/",
  "/\b([Aa])lem([^a-záàâãçéêíóôõúü])/",
  "/\b([Jj])anerio\b/",
  "/\bsumula\b/",
  "/\bbordero\b/",
  "/\bescriv(?:õe|ão)s\b/",
  "/\bExit(a(?:r?|do|ram)|ei|ou)\b/",
  "/\b([Cc])onecç(ão|ões)\b/",
  "/\b([Aa])ritimética(s?)\b/",
  "/\b([12]\d|3[01])[\/-](0?1|[Jj][Aa][Nn])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?2|[Ff][Ee][Vv])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?3|[Mm][Aa][Rr])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?4|[Aa][Bb][Rr])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?5|[Mm][Aa][Ii])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?6|[Jj][Uu][Nn])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?7|[Jj][Uu][Ll])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?8|[Aa][Gg][Oo])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?9|[Ss][Ee][Tt])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](10|[Oo][Uu][Tt])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](11|[Nn][Oo][Vv])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](12|[Dd][Ee][Zz])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?1|[Jj][Aa][Nn])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?2|[Ff][Ee][Vv])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?3|[Mm][Aa][Rr])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?4|[Aa][Bb][Rr])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?5|[Mm][Aa][Ii])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?6|[Jj][Uu][Nn])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?7|[Jj][Uu][Ll])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?8|[Aa][Gg][Oo])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](0?9|[Ss][Ee][Tt])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](10|[Oo][Uu][Tt])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](11|[Nn][Oo][Vv])[\/-]([12]\d{3})\b/",
  "/\b0?(\d)[\/-](12|[Dd][Ee][Zz])[\/-]([12]\d{3})\b/",
  "/\b([12]\d|3[01])[\/-](0?1|[Jj][Aa][Nn])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?2|[Ff][Ee][Vv])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?3|[Mm][Aa][Rr])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?4|[Aa][Bb][Rr])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?5|[Mm][Aa][Ii])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?6|[Jj][Uu][Nn])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?7|[Jj][Uu][Ll])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?8|[Aa][Gg][Oo])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](0?9|[Ss][Ee][Tt])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](10|[Oo][Uu][Tt])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](11|[Nn][Oo][Vv])[\/-]([4-9]\d)\b/",
  "/\b([12]\d|3[01])[\/-](12|[Dd][Ee][Zz])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?1|[Jj][Aa][Nn])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?2|[Ff][Ee][Vv])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?3|[Mm][Aa][Rr])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?4|[Aa][Bb][Rr])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?5|[Mm][Aa][Ii])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?6|[Jj][Uu][Nn])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?7|[Jj][Uu][Ll])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?8|[Aa][Gg][Oo])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](0?9|[Ss][Ee][Tt])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](10|[Oo][Uu][Tt])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](11|[Nn][Oo][Vv])[\/-]([4-9]\d)\b/",
  "/\b0?(\d)[\/-](12|[Dd][Ee][Zz])[\/-]([4-9]\d)\b/",
  "/\b([1-3]?\d)[\/-](0?1|[Jj][Aa][Nn])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?2|[Ff][Ee][Vv])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?3|[Mm][Aa][Rr])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?4|[Aa][Bb][Rr])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?5|[Mm][Aa][Ii])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?6|[Jj][Uu][Nn])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?7|[Jj][Uu][Ll])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?8|[Aa][Gg][Oo])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](0?9|[Ss][Ee][Tt])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](10|[Oo][Uu][Tt])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](11|[Nn][Oo][Vv])[\/-]([01]\d)\b/",
  "/\b([1-3]\d)[\/-](12|[Dd][Ee][Zz])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?1|[Jj][Aa][Nn])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?2|[Ff][Ee][Vv])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?3|[Mm][Aa][Rr])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?4|[Aa][Bb][Rr])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?5|[Mm][Aa][Ii])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?6|[Jj][Uu][Nn])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?7|[Jj][Uu][Ll])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?8|[Aa][Gg][Oo])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](0?9|[Ss][Ee][Tt])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](10|[Oo][Uu][Tt])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](11|[Nn][Oo][Vv])[\/-]([01]\d)\b/",
  "/\b0?(\d)[\/-](12|[Dd][Ee][Zz])[\/-]([01]\d)\b/",
  "/\b([Ss])[ée]culo 1\b/",
  "/\b([Ss])[ée]culo 2\b/",
  "/\b([Ss])[ée]culo 3\b/",
  "/\b([Ss])[ée]culo 4\b/",
  "/\b([Ss])[ée]culo 5\b/",
  "/\b([Ss])[ée]culo 6\b/",
  "/\b([Ss])[ée]culo 7\b/",
  "/\b([Ss])[ée]culo 8\b/",
  "/\b([Ss])[ée]culo 9\b/",
  "/\b([Ss])[ée]c(\.|ulo) 10\b/",
  "/\b([Ss])[ée]c(\.|ulo) 11\b/",
  "/\b([Ss])[ée]c(\.|ulo) 12\b/",
  "/\b([Ss])[ée]c(\.|ulo) 13\b/",
  "/\b([Ss])[ée]c(\.|ulo) 14\b/",
  "/\b([Ss])[ée]c(\.|ulo) 15\b/",
  "/\b([Ss])[ée]c(\.|ulo) 16\b/",
  "/\b([Ss])[ée]c(\.|ulo) 17\b/",
  "/\b([Ss])[ée]c(\.|ulo) 18\b/",
  "/\b([Ss])[ée]c(\.|ulo) 19\b/",
  "/\b([Ss])[ée]c(\.|ulo) 20\b/",
  "/\b([Ss])[ée]c(\.|ulo) 21\b/",
  "/\b0([1-9]) de ([Jj]aneiro|[Ff]evereiro|[Mm]arço|[Aa]bril|[Mm]aio|[Jj]unho|[Jj]ulho|[Aa]gosto|[Ss]etembro|[Oo]utubro|[Nn]ovembro|[Dd]ezembro)\b/",
  "/\bs[ée]c\. ?([XIV]+)/",
  "/\b([Aa])nti[- ]([^hiíìrs])/",
  "/\b([Aa])nti ?([hiíì])/",
  "/\b([Ii])muno-deficiência(s?)\b/",
  "/\b([Ii])nfra(?:[- ])vermelho(s?)\b/",
  "/\b([Mm])édico cirurgião\b/",
  "/\-mór\b/",
  "/\b([Nn])eo(?:[- ])darwinismo(s?)\b/",
  "/\b([Nn])eo(?:[- ])libera(l|is|lismos?)\b/",
  "/\b([Cc]ravi|[Pp]an)?(?:org[aã]|órga)o(s?)\b/",
  "/\b([Ss])emi(?:[- ])fina(l|is)\b/",
  "/\b([Ss])emi(?:[- ])círculo(s?)\b/",
  "/\b([Ss])emi(?:[- ])precioso(s?)\b/",
  "/\b([Uu])ltra-([bcdfgjklmnpqtvwxz])/",
  "/\b([Vv])ice governador(es|)\b/",
  "/\b([Vv])ice pre(feitos?|sidentes?)\b/",
  "/\bportugal\b/",
  "/\b([Aa])çorean([oa]s?)\b/",
  "/\b([Bb])ahian([oa]s?)\b/",
  "/\b brasil \b/",
  "/\b([Cc])]orinthiano(s?)\b/",
  "/\b[Cc]eara\b/",
  "/\b[Pp]araiba\b/",
  "/\b[Pp]iaui\b/",
  "/\bbritanico\b/",
  "/\bGrã(?:[- ]b| B)retanha\b/",
  "/\bhungaro\b/",
  "/\bm2\b/",
  "/\bm3\b/",
  "/\bkm2\b/",
  "/\bK([gm])\b/",
  "/\bg[hH][zZ]\b/",
  "/\b([μmkMGT]|[-0-9]+|\s)h[zZ]\b/",
  "/\bK[hH][zZ]\b/",
  "/(\s[0-2]?\d)(?:\s[Hh]r?s?|[Hh]r?s)\b/",
  "/(\d:[0-6]\d)([.,][\d]{1,3})?\s?[Hh]r?s?\b/",
  "/\b([μmMGT])j\b/",
  "/\b([-0-9]|\s)kj\b/",
  "/\bg[pP][aA]\b/",
  "/\b([μkMGT])p[aA]\b/",
  "/\bK[pP][aA]\b/",
  "/\bt[pP][aA]\b/",
  "/\b([μmGT])w\b/",
  "/\b([-0-9]|\s)kw\b/",
  "/\b([μmkMGT])w[bB]\b/",
  "/([^a-záàâãçéêíóôõúü\-])à bordo\b/",
  "/([^a-záàâãçéêíóôõúü\-])à cavalo\b/",
  "/([^a-záàâãçéêíóôõúü\-])à despeito\b/",
  "/([^a-záàâãçéêíóôõúü\-])à el([ae]s?)\b/",
  "/([^a-záàâãçéêíóôõúü\-])à es([st][ae])\b/",
  "/([^a-záàâãçéêíóôõúü\-])à fazer\b/",
  "/([^a-záàâãçéêíóôõúü\-])à fim\b/",
  "/([^a-záàâãçéêíóôõúü\-])à fundo\b/",
  "/\b([Aa])o meu ver\b/",
  "/([^a-záàâãçéêíóôõúü\-])à m(im|eus?)\b/",
  "/([^a-záàâãçéêíóôõúü\-])à motor\b/",
  "/([^a-záàâãçéêíóôõúü\-])à norte\b/",
  "/([^a-záàâãçéêíóôõúü\-])à nós\b/",
  "/([^a-záàâãçéêíóôõúü\-])à óleo\b/",
  "/([^a-záàâãçéêíóôõúü\-])à partir\b/",
  "/([^a-záàâãçéêíóôõúü\-])à pé([^a-záàâãçéêíóôõúü\-])/",
  "/([^a-záàâãçéêíóôõúü\-])à pedido/",
  "/\b(\d\.?)º posição\b/",
  "/([^a-záàâãçéêíóôõúü\-])à prazo\b/",
  "/([^a-záàâãçéêíóôõúü\-])à propósito\b/",
  "/([^a-záàâãçéêíóôõúü\-])à respeito\b/",
  "/([^a-záàâãçéêíóôõúü\-])à si\b/",
  "/\b([NnDd]?)o(s?) ([Ss])[ií]ndrome(s?)\b/",
  "/\bO ([Ss])[ií]ndrome\b/",
  "/([^a-záàâãçéêíóôõúü\-])à tempo\b/",
  "/([^a-záàâãçéêíóôõúü\-])à t(i|eus?)\b/",
  "/([^a-záàâãçéêíóôõúü\-])à todos\b/",
  "/([^a-záàâãçéêíóôõúü\-])à tudo\b/",
  "/([^a-záàâãçéêíóôõúü\-])à u(m|mas?|ns)\b/",
  "/([^a-záàâãçéêíóôõúü\-])à vapor\b/",
  "/\b(?:A\.[Cc]|a\.c)\.\b/",
  "/\b([Aa])bsteu\b/",
  "/\b([Aa])bsteram\b/",
  "/([^a-záàâãçéêíóôõúü\-])àc[eê]rca\b/",
  "/([^a-záàâãçéêíóôõúü\-])Àc[eê]rca\b/",
  "/\b([Aa])cesssad([ao](s?))\b/",
  "/\b([Ii]n|)([Aa])cessive(l|is)\b/",
  "/\b([Dd]es|)([Aa])conselhave(l|is)\b/",
  "/\b([Aa])custica(s?)\b/",
  "/\b([Aa])dmnista(r|ador?)\b/",
  "/\b([Aa])dmnistrativ([ao]s?)\b/",
  "/\b([Aa])dimit(e|iram|ir|iu)\b/",
  "/\b([Aa])diquir(ir|id[ao]s?|indo|iu|em?)\b/",
  "/\b([Aa])eron(?:a[ul]|ál)tic([ao]s?)\b/",
  "/\b([Aa])erosol\b/",
  "/\b([Dd]es|)([Aa])gradave(l|is)\b/",
  "/\b([Aa])gricola(s?)\b/",
  "/\bagua(s?)\b/",
  "/\bAgua(s?)\b/",
  "/\b([Aa])juda-lo/",
  "/\b(?:álb[úù]|àlb[uúù])(m|ns)\b/",
  "/\b(?:Álb[úù]|Àlb[uúù])(m|ns)\b/",
  "/\b(?:alb[úù]ms|[áà]lb[uúù]ms)\b/",
  "/\b(?:Alb[úù]ms|[ÁÀ]lb[uúù]ms)\b/",
  "/\bAlcoo(l|is)\b/",
  "/\balcoo(l|is)\b/",
  "/\b([Aa])lc(?:oolé|ol[eé])mia(s?)\b/",
  "/\b([Aa])lc(?:[oó]o?)l((?:atra|ic[ao])s?)\b/",
  "/\b([Aa])leatóriamente\b/",
  "/\b([Aa])lgor(?:ít|[ií]ti)mo(s?)\b/",
  "/\b([Aa])lguem\b/",
  "/\b([Aa])(gun|lgu)s\b/",
  "/\balí([^a-záàâãçéêíóôõúü\-])/",
  "/\b([Aa])lianca(s?)\b/",
  "/\balimento s([^a-záàâãçéêíóôõúü\-])/",
  "/\butroista(s?)/",
  "/\b([Aa])luminio(s?)\b/",
  "/\b([Aa])manha\b/",
  "/\bhambiente(s?)\b/",
  "/\bHambiente(s?)\b/",
  "/\bambito(s?)\b/",
  "/\bAmbito(s?)\b/",
  "/\b([Aa])mbulancia(s?)\b/",
  "/\b([Aa])put(a(?:r?|do|ram)|ei|ou)\b/",
  "/\b([Aa])naliz(a[mr]?|o|an?do|(?:ar)?em)\b/",
  "/\b([Aa])nálize\b/",
  "/\b([Aa])nemona\b/",
  "/\bangulo(s?)\b/",
  "/\bAngulo(s?)\b/",
  "/\b([Aa])niquilacao\b/",
  "/\b([Aa])n[cç]ios([oa]s?|amente)\b/",
  "/\b([Aa])nt([ei])-?diluviano\b/",
  "/\b([Aa])ntepôr\b/",
  "/\b([Aa])nuciado\b/",
  "/\bde encontro ao\b/",
  "/\b([Aa])pixonad([ao]s?)\b/",
  "/\b([Aa])pareçe([mu]?)\b/",
  "/\b([Aa])parencia(s?)\b/",
  "/\b([Aa])pezar\b/",
  "/\b([Aa])proximadamete\b/",
  "/\b([Aa])rco(?:-?i|í)ris\b/",
  "/\b([Aa])lgeria?no\b/",
  "/\b([Aa])ristocratica(s?)\b/",
  "/\b([Aa])rquipelago(s?)\b/",
  "/\b([Aa])rtistico(s?)\b/",
  "/\bÁs\s(\d\d?[h:]?\d{0,2}\b)/",
  "/\bás\s(\d\d?[h:]?\d{0,2}\b)/",
  "/\b([Aa])s sua\b/",
  "/\bÁs\sve[sz]es\b/",
  "/\bás\sve[sz]es\b/",
  "/\b([Aa])(?:c|ss)en(?:[çcs]+[ãa])o\b/",
  "/\b([Aa])scen(?:[çc]ã|sa|ss[ãa])o\b/",
  "/\b([Aa])s(?:ass|as|sas)in(os?|a[rs]?|ad[ao]s?|atos?)\b/",
  "/\b([Aa])ssembléia(s?)\b/",
  "/\b([Aa])cessor(as?|es|ia)\b/",
  "/\b([Aa])sterístic(os?)\b/",
  "/\b([Aa])tr(?:[áa]z|as)\b/",
  "/\b([Aa])trav(e[sz]|éz)de\b/",
  "/\b([Aa])trav(e[sz]|éz)\b/",
  "/\b([Aa])tribue\b/",
  "/\b([Aa])tr[íi]buid([ao]s?)\b/",
  "/\b([Aa])udiencia(s?)\b/",
  "/\b([Aa])usencia(s?)\b/",
  "/\b([Aa])utomáticamen?te\b/",
  "/\b([Aa])utomove(l|is)\b/",
  "/\b([Aa])ltoridade(s?)\b/",
  "/\b([Aa])viao\b/",
  "/\b([Aa])zaléia\b/",
  "/\b([Bb])aínha(s?)\b/",
  "/\b([Bb])anc(a-rr?|ar)ota\b/",
  "/\b([Bb])arbarie(s?)\b/",
  "/\b([Bb])astate\b/",
  "/\b([Bb])ébe(s?)\b/",
  "/\b([Bb])ébé(s?)\b/",
  "/\b([Bb])enção\b/",
  "/\b([Bb])enefici?encia\b/",
  "/\b([Bb])eneficiente(s?)\b/",
  "/([Bb])ibliografic([ao]s?)\b/",
  "/\b([Bb])iograifa(s?)\b/",
  "/([Bb])iografic([ao]s?)\b/",
  "/\b([Bb])iópsia\b/",
  "/\b([Bb])rasilia\b/",
  "/\b([Bb])(?:orb[ou]|urbo)rinho(s?)\b/",
  "/\bbuscão\b/",
  "/\b([Cc])abeca(s?)\b/",
  "/\b([Cc])abelereir([ao]s?)\b/",
  "/\b([Cc])aiem\b/",
  "/\b([Cc])aido\b/",
  "/\b([Cc])alv[íi]ce\b/",
  "/\b([Cc])ambio(s?)\b/",
  "/\b([Cc])amêra(s?)\b/",
  "/\b([Cc])ampi(ão|ões|onato)\b/",
  "/\b([Cc])ampeao\b/",
  "/\b([Cc])ampeoes\b/",
  "/\b[Cc]apitão [Mm]or\b/",
  "/\b([Cc])apitulo(s?)\b/",
  "/\bscreenshot\b/",
  "/\bScreenshot\b/",
  "/\b([Cc])aracteristica(s?)\b/",
  "/\bCastanheira de Pêra\b/",
  "/\b([Cc])ataliza(dora?|r|d[ao])\b/",
  "/\b([Cc])at[aá]lize\b/",
  "/\b([Cc])atalogo(s?)\b/",
  "/\b([Cc])atequis(a[rs]?|o|ador?)\b/",
  "/\b([Cc])élula(s?) tronco\b/",
  "/\b([Cc])elula(s?)\b/",
  "/\b([Cc])emiterio(s?)\b/",
  "/\b([Cc])enario(s?)\b/",
  "/\b([Cc])hamd([oa])\b/",
  "/\bxux[uú]\b/",
  "/\bXux[uú]\b/",
  "/\b([Cc])idad(ãe|õe)s\b/",
  "/\b([Cc])iencia(s?)\b/",
  "/\b([Cc])irculo(s?)\b/",
  "/\b([Cc])lassic([oa]s?)\b/",
  "/\b[Cc]ms\b/",
  "/\b(co-|co)habitação\b/",
  "/\b([Cc])oalis(ão|ões)\b/",
  "/\b(in|)([Cc])oerencia(s?)\b/",
  "/\b([Cc])ole(c?)t(?:[âa]ni|ane)([ao]s?)\b/",
  "/\b([Cc])oncerteza\b/",
  "/\b([Cc])omec(ou|a[mrs]?)\b/",
  "/\b([Cc])omercio(s?)\b/",
  "/\b([Cc])ompania(s?)\b/",
  "/\b([Ii]nc|[Cc])ompetencia/",
  "/\b([Cc])ompetic(ão|ões)/",
  "/\b([Dd]es|)([Cc])ompôr\b/",
  "/\b([Cc])omporam\b/",
  "/\b([Cc])onclue\b/",
  "/\b([Cc])oncluíu\b/",
  "/\b([Cc])ondicao\b/",
  "/\b([Cc])onfudir\b/",
  "/\b([Cc])oncegu(es?|ir)\b/",
  "/\b([Cc])on?ciderad([oa]s?)\b/",
  "/\b([Cc])onsite(m?)\b/",
  "/\b([Cc])onstitui(am?|ram)\b/",
  "/\b([Cc])ons?trucao\b/",
  "/\b([Cc])on(?:strui|tru[ií])d([ao](s?))\b/",
  "/\b([Cc])ontemporaneo(s?)\b/",
  "/\b([Cc])onteu\b/",
  "/\b([Cc])ontiam\b/",
  "/\b([Cc])ontinar\b/",
  "/\b([Cc])ontinou\b/",
  "/\b([Cc])onteram\b/",
  "/\b([Cc])ontesse(m?)\b/",
  "/\b([Cc])ontratato(s?)\b/",
  "/\b([Cc])ontribuir(am?)\b/",
  "/\b([Cc])onvidade(s?)\b/",
  "/\b([Cc])ôr(|es)\b/",
  "/\b([Cc])orinthian([ao]s?)\b/",
  "/\b([Cc])orografico(s?)\b/",
  "/\b([Cc])orrijir\b/",
  "/\b([Cc])ustum(es?|avam?)\b/",
  "/\b([Cc])râneo(s?)\b/",
  "/\b([Cc])ria(?:ç|nc)a(s?)\b/",
  "/\b([Cc])ristianizac[aã]o\b/",
  "/\b([Cc])ristianizac[oõ]es\b/",
  "/\b([Cc])ronológicamente\b/",
  "/\b([Cc])ompriment(a(?:r?|do|ram)|ei|ou)\b/",
  "/\b[Dd][Cc]\.\b/",
  "/\bD(\.|)c\.(\W)\b/",
  "/\b([Dd])a seu\b/",
  "/\b([Dd])a-se\b/",
  "/\bdenovo\b/",
  "/\b([Dd])e-?rr?epente\b/",
  "/\b([Dd])o(s?) sua(s?)\b/",
  "/\b([Dd])ecada(s?)\b/",
  "/\b([Dd])ecadencia(s?)\b/",
  "/\b([Dd])eclinio(s?)\b/",
  "/\b([Ii]n|)([Dd])efeni(r|ção|ções)\b/",
  "/\b([Ii]n|)([Dd])efinitamente\b/",
  "/\b([Dd])eich(ar?|ando|aria|ava|ou|e)\b/",
  "/\b([Ii]nd|[Dd])epedente(s?)\b/",
  "/\b([Dd])espois\b/",
  "/\b([Dd])eposito(s?)\b/",
  "/\b([Dd])isastre(s?)\b/",
  "/\b([Dd])ecer\b/",
  "/\b([Dd])escubr(e|ir|imentos?)\b/",
  "/\b([Dd])esconfianca\b/",
  "/\b([Dd])esde sedo\b/",
  "/\b([Dd])ispender\b/",
  "/\b([Dd])isperdiça\b/",
  "/\b([Dd])ispert(a(?:r?|do|ram)|ei|ou)\b/",
  "/\b([Dd])estroi\b/",
  "/\b([Dd])e(?:strui|tru[ií])d([ao](s?))\b/",
  "/\b([Dd])esvanescer\b/",
  "/\b([Dd])eteu\b/",
  "/\b([Dd])etia(m?)\b/",
  "/\b([Dd])eteram\b/",
  "/\b([Dd])etesse(m?)\b/",
  "/\b([Dd])evo(?:c[aã]|ça)o\b/",
  "/\b([Dd])iagnostico(s?)\b/",
  "/\b([Dd])iáriamente\b/",
  "/\b([Dd])iari([ao])\b/",
  "/\b([Dd])ifrente(s?)\b/",
  "/\b([Dd])ífic(il|eis)\b/",
  "/\b([Dd])ijit(a(?:r?|do|ram)|ei|ou)\b/",
  "/\b([Dd])iminue\b/",
  "/\b([Dd])irgid([oa]s?)\b/",
  "/\b([Dd])iscursão\b/",
  "/\b([Dd])esinteria\b/",
  "/\b([Dd])ispendio(s?)\b/",
  "/\b([Ii]n)?([Dd])(?:ispensa|espens[aá])ve(l|is)\b/",
  "/\b([Dd])(?:esr[ei]t(?:[ei]?)|isret(?:[ei]?)|isrit[ie])mia(s?)\b/",
  "/\b([Dd])istorçer\b/",
  "/\b([Dd])istribuídor(a?)\b/",
  "/\b([Dd])isturbio(s?)\b/",
  "/\b([Dd])a(s?) seu(s?)\b/",
  "/\b([Dd])oa(?:c[oõ]|ço)es\b/",
  "/\b([Dd])ocumentario(s?)\b/",
  "/\b([Dd])ôou\b/",
  "/\b([Dd])ragao\b/",
  "/\b([Dd])ruída\b/",
  "/\b([ée])as\b/",
  "/\bè(s?)\b/",
  "/\bÈ(s?)\b/",
  "/\b([Ee])fervecência\b/",
  "/\b([Ee])letronico(s?)\b/",
  "/\b([Ee])ncima d/",
  "/\b([Ee])n frente\b/",
  "/\b([Ee])m meado\b/",
  "/\b([Ee])minencia(s?)\b/",
  "/\bImpacad([oa]s?)\b/",
  "/\bimpacad([oa]s?)\b/",
  "/\bindividad([ao]s?)\b/",
  "/\bIndividad([ao]s?)\b/",
  "/\benfase\b/",
  "/\benígma\b/",
  "/\b([Ee])nquando\b/",
  "/\b([Ee])ntao\b/",
  "/\b([Ee])ntreterimento\b/",
  "/\b([Ee])ntreteu\b/",
  "/\b([Ee])ntretia(m?)\b/",
  "/\b([Ee])ntretesse(m?)\b/",
  "/\bEpic([ao]s?)\b/",
  "/\bÉpiro\b/",
  "/\bepic([ao]s?)\b/",
  "/\b([Ee])pisodio(s?)\b/",
  "/\bEpoca(s?)\b/",
  "/\bepoca(s?)\b/",
  "/\b([Ee])rotic([oa]s?)\b/",
  "/\berrôneamente\b/",
  "/\b([Ee])xcava(r|ção|ções)\b/",
  "/\b([Ee])xcus(a[rs]?|os?|ad[oa])\b/",
  "/\b([Ee])xdr[uú]xul([oa]s?)\b/",
  "/\b([Ee])specie\b/",
  "/\b([Ee])speranca(s?)\b/",
  "/\b([Ee])spiao\b/",
  "/\b([Ee])spirit([oa]s?)\b/",
  "/\b([Ee])xpontâne([oa]s?)\b/",
  "/\b([Ee])sporádicamente\b/",
  "/\b([Ee])scerda(s?)\b/",
  "/\b([Ee])squesito(s?)\b/",
  "/\b([Ee])stabelecimente(s?)\b/",
  "/\b([Ee])staçãos\b/",
  "/\b([Ee])stadio(s?)\b/",
  "/\b([Ee])stao\b/",
  "/\b([Ee])stva\b/",
  "/\b([Ee])steje\b/",
  "/\b([Ee])xtend(e[ru]?|eram|id[ao]s?|endo)(\b|\-)/",
  "/\b([Ee])sterelidade\b/",
  "/\b([Ee])strei(ar|ad[ao]|aram|ou)\b/",
  "/\b([Ee])stutura(s?)\b/",
  "/\b([Ee])studio(s?)\b/",
  "/\b([Ee])svanescer\b/",
  "/\betica(s?)\b/",
  "/\bEtica(s?)\b/",
  "/\b([Ee])tinia(s?)/",
  "/\béti?nia(s?)/",
  "/\bÉti?nia(s?)/",
  "/\bEtnic([ao]s?)\b/",
  "/\betnic([ao]s?)\b/",
  "/\b([Ee])voluida(s?)\b/",
  "/\b([Ee])zat([ao]s?|idão)\b/",
  "/\b([Ee])xelente(s?)\b/",
  "/\b([Ee])xepç(ão|ões)\b/",
  "/\b([Ee])xijência(s?)\b/",
  "/\b([Ee])xite(m?)\b/",
  "/\b([Ff])amilia(s?)\b/",
  "/\b([Ff])armaceutic([oa]s?)\b/",
  "/\b([Ff])eitiçeir([oa]s?)\b/",
  "/\b([Ff])[ie]menin(os?|ismos?)\b/",
  "/\b([Ff])isica\b/",
  "/\b([Ff])ortuíto(s?)\b/",
  "/\b([Ff])órums\b/",
  "/\b([Ff])reis\b/",
  "/\b([Ff])unerario(s?)\b/",
  "/\b([Gg])aleao\b/",
  "/\b([Gg])(?:a[zs]|áz)([^a-záàâãçéêíóôõúü\-])/",
  "/\b([Gg])êmio(s?)\b/",
  "/\b([Gg])enero(s?)\b/",
  "/\b([Gg])eometric([oa]s?)\b/",
  "/\b([Gg])eneceu\b/",
  "/\b([Gg])iria(s?)\b/",
  "/\b([Gg])orgeta\b/",
  "/\b[Gg]overnador [Gg]eral\b/",
  "/\b([Gg])andes\b/",
  "/\b([Gg])rangear\b/",
  "/\b([Gg])ratuíto(s?)\b/",
  "/\b([Gg])rávidade\b/",
  "/\b([Gg])uiz(a[mr]?|an?do|(?:ar)?em)\b/",
  "/([^a-záàâãçéêíóôõúüH\-])[aàá] muito tempo\b/",
  "/\babilidade(s?)\b/",
  "/\bAbilidade(s?)\b/",
  "/\b([Hh])aviam diversos\b/",
  "/\b([Hh])aviam inúmeros\b/",
  "/\b([Hh])aviam muitos\b/",
  "/\b([Hh])aviam poucos\b/",
  "/\b([Hh])aviam vários\b/",
  "/\b([Hh])ectar\b/",
  "/\b([Hh])eroíco/",
  "/\bexit(a(?:r?|do|ram)|ei|ou)\b/",
  "/\b([Hh])eterosexua(l|is)/",
  "/\b([Hh])ilariedade\b/",
  "/\b([Hh])istoric([oa]s?)\b/",
  "/\b([Hh])omorosexua(l|is)/",
  "/\b([Hh])omosexua(l|is|lidade)\b/",
  "/\b([Hh])orario(s?)\b/",
  "/\b([Hh])ouveram\b/",
  "/\bicone(s?)\b/",
  "/\bIcone(s?)\b/",
  "/\b([Ii])déia(s?)\b/",
  "/\b([Ii])ndentidade(s?)\b/",
  "/\b([Ii])ndioma(s?)\b/",
  "/\b([Ii])lacção\b/",
  "/\b([Ii])mportancia(s?)\b/",
  "/\b([Ii])mpotante(s?)\b/",
  "/\b([Ii])mprenssa\b/",
  "/\b([Ii])ncendio\b/",
  "/\b([Ii])nclue\b/",
  "/\b([Ii])ncluido\b/",
  "/\b([Ii])ncluíndo\b/",
  "/\b([Ii])ncluiram\b/",
  "/\b([Ii])nclusivé([^a-záàâãçéêíóôõúü\-])/",
  "/\b([Ii])ncompetencia\b/",
  "/\b([Ii])ncrive(l|is)\b/",
  "/\bIndice(s?)\b/",
  "/\bindice(s?)\b/",
  "/\b([Ii])ndigina(do|ção|r)\b/",
  "/\b([Ii])nd[íi]viduo(s?)\b/",
  "/\b([Ii])ndustria(s?)\b/",
  "/\b([Ii])nedita(s?)\b/",
  "/\b([Ii])nfancia(s?)\b/",
  "/\bIngleterra\b/",
  "/\b([Ii])nglêsa(s?)\b/",
  "/\b([Ii])nícia\b/",
  "/\bÍn[íi]c[íi]a\b/",
  "/\bín[íi]c[íi]a\b/",
  "/\bÍn([íi])c[íi]o\b/",
  "/\bín([íi])c[íi]o\b/",
  "/\b([Ii])ntigraç(ão|ões)\b/",
  "/\b([Ii])nteligencia(s?)\b/",
  "/\b([Ii])ntenaciona(l|is)\b/",
  "/\b([Ii])nterpreta-l([ao])s\b/",
  "/\b([Ii])nterviu\b/",
  "/\b([Ii])nterviram\b/",
  "/\b([Ii])nterviss(em?)\b/",
  "/\b([Ii])ntervido\b/",
  "/\bEntitul(ar?|ad[ao]s?)\b/",
  "/\bentitul(ar?|ad[ao]s?)\b/",
  "/\b([Ii])ntrinsec([ao]s?)\b/",
  "/\b([Ii])numer([ao])s\b/",
  "/\b([Ii])riz(a[mr]?|o|an?do|(?:ar)?em)\b/",
  "/\b([Ii])rmao(s?)\b/",
  "/\b([Ii])rupção\b/",
  "/\bÍtem\b/",
  "/\bítem\b/",
  "/\bgeito\b/",
  "/\bGeito\b/",
  "/\bgeropiga(s?)\b/",
  "/\bGipe(s?)\b/",
  "/\bgipe(s?)\b/",
  "/\b([Jj])udiciaria(s?)\b/",
  "/\b([Jj])u(?:í[sz]|is)\b/",
  "/\b([Jj]|[Pp]rej)u(?:i[sz]|ís)([ao]s?|es)\b/",
  "/\b([Jj])úniores\b/",
  "/\b([Jj])uridic([ao]s?)\b/",
  "/\b([Jj])uridição\b/",
  "/\b([Jj])uz\b/",
  "/\bKM\b/",
  "/\b([Ll])aboratorio(s?)\b/",
  "/\b([Ll])e?êm\b/",
  "/\b([Ll])embrão\b/",
  "/\b([Ll])eucémia(s?)\b/",
  "/\b([Ll])eva-lo\b/",
  "/\b([Ll])ider(es|)\b/",
  "/\b([Ll])imitrofe(s?)\b/",
  "/\b([Ll])ingua(s?)\b/",
  "/\b([Ll])isonge(ar?|aram?|arou)\b/",
  "/\b([Ll])ogista(s?)\b/",
  "/\b([Mm])ágia\b/",
  "/\b([Mm])elhores (classifi|colo)cados\b/",
  "/\b([Mm])agestade(s?)\b/",
  "/\b([Mm])au estar\b/",
  "/\b([Mm])angerico(s?)\b/",
  "/\b([Mm])anteu\b/",
  "/\b([Mm])antia(m?)\b/",
  "/\b([Mm])anteram\b/",
  "/\b([Mm])antesse(m?)\b/",
  "/\b([Mm])anuntenção\b/",
  "/\b([Mm])aritim([ao]s?)\b/",
  "/\b([Mm])ais também\b/",
  "/\b([Mm])eio-ambiente\b/",
  "/\b([Mm])ending(\w{1,7})\b/",
  "/\b([Mm])ercenari([oa]s?)\b/",
  "/\b([Mm])êses\b/",
  "/\b([Mm])emso\b/",
  "/\b([Mm])etodo(s?)\b/",
  "/\b([Mm])ech(e[ru]?|eram)\b/",
  "/\bMexico\b/",
  "/\b([Mm])icroscopic([ao]s?)\b/",
  "/\b([Mm])ilões\b/",
  "/\b([Mm])inisterio(s?)\b/",
  "/\b([Mm])iscegenaç(ão|oes)\b/",
  "/\b([Mm])issao\b/",
  "/\b([Mm])istic([oa]s?)\b/",
  "/\b[Mm]ls\b/",
  "/\b([Mm])ór\b/",
  "/\b([Mm])ostando\b/",
  "/\b([Mm])un(?:[ií]?ci|ící)pio(s?)\b/",
  "/\b([Mm])usica(s?)\b/",
  "/\b([Nn])ac(eu|id[ao]|imento)\b/",
  "/\b([Nn])aturza\b/",
  "/\b([Nn])ecessáriamente\b/",
  "/\b([Nn])escess[áa]ri([ao]s?)\b/",
  "/\b([Nn])es[sc]ecidade(s?)\b/",
  "/\b([Nn])enum\b/",
  "/\b([Nn])inguem\b/",
  "/\b([Nn])ivel\b/",
  "/\b([Nn])o día\b/",
  "/\b([Nn])otávelmente\b/",
  "/\b([Ii]?)([Nn])umero(s?)\b/",
  "/\b([Nn])umismatic([oa]s?)\b/",
  "/\b([Nn])úve(m|ns)\b/",
  "/\b([Oo])bss?c?ecad([ao]s?)\b/",
  "/\b([Oo])brigatóriamente\b/",
  "/\b([Oo])bteu\b/",
  "/\b([Oo])bitid([ao])\b/",
  "/\b([Oo])btia(m?)\b/",
  "/\b([Oo])bteram\b/",
  "/\b([Oo])btesse(m?)\b/",
  "/([^a-záàâãçéêíóôõúü\-])Óbviamente\b/",
  "/([^a-záàâãçéêíóôõúü\-])óbviamente\b/",
  "/\b([Oo])cor(eu|id[ao])\b/",
  "/\bodio\b/",
  "/\bOdio\b/",
  "/\b([Oo])ficilamente\b/",
  "/\b([Oo])límpiada(s?)\b/",
  "/\b([Oo])purtunidade(s?)\b/",
  "/\b(?:Org[aã]|Órga)o(s?)\b/",
  "/\b([Oo])s seu\b/",
  "/\b([Oo])(t|utr)ubro\b/",
  "/\b([Pp])aises\b/",
  "/\b([Pp])alacio\b/",
  "/\b([Pp])alvra(s?)\b/",
  "/\b([Pp])aleolitic([ao]s?)\b/",
  "/\b([Pp])ra([^a-záàâãçéêíóôõúü\-])/",
  "/\b([Pp])araliz(ar?|ação|ações|ad[ao]s?|o)\b/",
  "/\b([Pp])[aá]ra-quedas\b/",
  "/\b([Pp])aroco(s?)\b/",
  "/\b([Pp])artipação\b/",
  "/\b([Pp])atenteave(l|is?)\b/",
  "/\b([Pp])atria\b/",
  "/\b([Pp])aúl\b/",
  "/\b([Rr]e)?([Pp])ercu(?:r(?:ss?|ç)|ç)(ão|ões)\b/",
  "/\b([Rr]e)?([Pp])ercurt(i[ru]|iram|e|id[ao]s?|indo)\b/",
  "/\b([Pp])(?:ercurss?|recur?ss?)ionis(ta|mo)(s?)\b/",
  "/\b([Pp])erimetro(s?)\b/",
  "/\b([Pp])erola(s?)\b/",
  "/\b([Pp])r?e(?:(?:rsoan|sona)gem|rsonagen)\b/",
  "/\b([Pp])(ero|re)sonage[nm]s\b/",
  "/\b([Pp])(?:er|res?)pe(c?)tiv(\w{1,7})\b/",
  "/\b([Pp])ertecente(s?)\b/",
  "/\b([Pp])ertub(\w{1,10})\b/",
  "/\b([Pp])erú([^a-záàâãçéêíóôõúü\-])/",
  "/\b([Pp])etrólio\b/",
  "/\b([Pp])etroquimic([ao]s?)\b/",
  "/\b([Pp])ingüi(m|ns)\b/",
  "/\b([Pp])iquinique(s?)\b/",
  "/\b([Pp])lastic([oa]s?)\b/",
  "/\b([Pp])ode(ram|ssem?)\b/",
  "/\b([Pp])olitic([ao]s?)\b/",
  "/\b([Pp])olue\b/",
  "/\b([Pp])oluíção\b/",
  "/\b([Pp])onteaguda(s?)\b/",
  "/\b([Pp])op(?:ul|ola)ção\b/",
  "/\b([Pp])orisso\b/",
  "/\b([Pp])ossue\b/",
  "/\b([Pp])ossuia\b/",
  "/\b([Pp])ocuo\b/",
  "/\b([Pp])ráticamente\b/",
  "/\b([Pp])raso([ao]s?)\b/",
  "/\b([Pp])reciz(a[mr]?|o|an?do|(?:ar)?em)\b/",
  "/\b([Pp])recu(?:rss|ss)(or(?:es|as?)?|[aã]o|[oõ]es)\b/",
  "/\b([Pp])reucupar(em)?\b/",
  "/\b([Dd]es|[Pp])retencio(s?)\b/",
  "/\b([Pp])retencioso\b/",
  "/\b([Pp])revinir\b/",
  "/\b([Pp])r[íi]mari([ao]s?)\b/",
  "/\b([Pp])ricipa(l|is)\b/",
  "/\b([Pp])rinc[ií]pe(s?)\b/",
  "/\b([Pp])r[íi]ncipio(s?)\b/",
  "/\b([Pp])r(?:ev[ei]l[eéií]|ivel[eéií]|ivil[éií])gi(e(?:m?)|ou|a(?:r|rá|rão|rem|ri?am?|m|vam?|ssem?|d[ao]s?|ndo|damente)?)\b/",
  "/\b([Pp])r(?:evil[eé]|ivile)gio(s?)\b/",
  "/\b([Pp])rocurão\b/",
  "/\b([Pp])rodígios([ao]s?)\b/",
  "/\b([Pp])r[óo]gam(a[rs]?|ação|adora?)\b/",
  "/\b([Pp])roib(o|[ae][ms]?)\b/",
  "/\b([Pp])ropiedade(s?)\b/",
  "/\b([Pp])r[óo]pi([ao]s?)\b/",
  "/\b([Pp])roteina(s?)\b/",
  "/\b([Pp])rov(?:[aá]vemen|avelme|ávelmen?)te\b/",
  "/\b([Pp])rovincia(s?)\b/",
  "/\b([Pp])roxim([oa]s?)\b/",
  "/\b([Pp])siquico\b/",
  "/\b([Pp])ublico(s?)\b/",
  "/\b([Qq])ualquier\b/",
  "/\b([Qq])uandos\b/",
  "/\b([Qq])uermece(s?)\b/",
  "/\b([Qq])uimic([oa]s?)\b/",
  "/\b([Qq])uize(mos|r(?:a[ms]?|des|e[ms]|mos)?|s(?:se[ms]?|tes?))\b/",
  "/\b([Qq])ui(?:z[eé]|se)(r(?:amos|eis)|sse(?:is|mos))\b/",
  "/\b([Rr])azante\b/",
  "/\b([Rr])azao\b/",
  "/\b([Rr])azoes\b/",
  "/\b([Rr])elidade\b/",
  "/\b([Rr])écorde\b/",
  "/\b([Rr])e-escrever(em|)\b/",
  "/\b([Rr])einvindic(a[mr]|ação|ou|aram|ações)\b/",
  "/\b([Rr])ejuvenece([mr]?)\b/",
  "/\b([Rr])elogio(s?)\b/",
  "/\b([Rr])emanecente(s?)\b/",
  "/\b([Rr])espresentaç(ão|ões)\b/",
  "/\b([Rr])e(?:pu|b[úu])blica(s?)\b/",
  "/\b([Rr])equ(eriram|iseram)\b/",
  "/\b([Rr])equ(eriu|is)\b/",
  "/\b([Rr])equesit([ao]s?)\b/",
  "/\b([Rr])esidencia\b/",
  "/\b([Rr])esidêncial\b/",
  "/\b(in|)([Rr])esponsave(l|is)\b/",
  "/\b([Rr])essu(?:c|ss)it(a(?:r?|do|ram)|ei|ou)\b/",
  "/\b([Rr])eestabelec(er|id[ao]s?|imento|eu?|eça|endo)\b/",
  "/\b([Rr])ectaguarda(s?)\b/",
  "/\b([Rr])eteu\b/",
  "/\b([Rr])etia(m?)\b/",
  "/\b([Rr])eteram\b/",
  "/\b([Rr])etesse(m?)\b/",
  "/\b([Rr])eune(m?)\b/",
  "/\b([Rr])(?:[íi]ti|ít)mo(s?)\b/",
  "/\b([Rr])itualistico\b/",
  "/\b([Rr])omantic([ao])\b/",
  "/\b([Rr])osa([ -])dos([ -])[Vv]entos\b/",
  "/\b([Rr])opa(s?)\b/",
  "/\b([Rr]pg|RPG)'s\b/",
  "/\b([Rr])úbrica(s?)\b/",
  "/\b([Rr])úpia\b/",
  "/\b([Ss])acerdocio\b/",
  "/\b([Ss])aiem\b/",
  "/\b([Ss])ai(ram|das?)\b/",
  "/\b([Ss])antuario(s?)\b/",
  "/\b([Ss])[aâ]o(s?)\b/",
  "/\b([Ss])audave(l|is)\b/",
  "/\b([Ss])eculo(s?)\b/",
  "/\b([Ss])ecundari([oa]s?)\b/",
  "/\b([Ss])eguite(s?)\b/",
  "/\b([Ss])eje(m?)\b/",
  "/\b([Ss])emaforo(s?)\b/",
  "/\b([Ss])emanario(s?)\b/",
  "/\b([^d][^e] )([Ss])edo\b/",
  "/\b([Ss])nedo\b/",
  "/\b([Ss])[éê]niores\b/",
  "/\b([Ii]n|)([Ss])ensive(l|is)\b/",
  "/\b([Ss])ig(?:ui|i)nific(ar?|ado)\b/",
  "/\b([Ss])imb[uo]lo(s?)\b/",
  "/\b([Ss])implemente\b/",
  "/\b([Ss])indrome(s?)\b/",
  "/\b([Ss])inonimo(s?)\b/",
  "/\b([Ss])inópse(s?)\b/",
  "/\b([Ss])ocio(s?)\b/",
  "/\b([Ss])ócio-cultura(l|is)\b/",
  "/\b([Ss])otão\b/",
  "/\b([Ss])ubjulgar\b/",
  "/\b([Ss])ubstituid([ao]s?)\b/",
  "/\b([Ss])ubstituíndo\b/",
  "/\b([Ss])uéc([ao])\b/",
  "/\b([Ss])uícidio(s?)\b/",
  "/\b([Ss])upermecado(s?)\b/",
  "/\b([Ss])upertiç(ão|ões)\b/",
  "/\b([Ss])uspenção\b/",
  "/\b([Ss])urgio\b/",
  "/\b([Tt])e-lo\b/",
  "/\b([Tt])ecnica([oa]s?)\b/",
  "/\b([Tt])erritorio(s?)\b/",
  "/\b([Tt])ijela(s?)\b/",
  "/\b([Tt])ils\b/",
  "/\b(a?)([Tt])ipic([ao]s?)\b/",
  "/\b([Tt])itulo(s?)\b/",
  "/\b([Tt])or[áa]xic([oa]s?)\b/",
  "/\b([Tt])ranscedenta(l|is)\b/",
  "/\b([Tt])ranssexua(l|is?)\b/",
  "/\b([Tt])ransmissive(l|is)\b/",
  "/\b([Tt])ansmitir(|em)\b/",
  "/\b([Tt])rasnporte(s?)\b/",
  "/\b([Tt])raser\b/",
  "/\b([Tt])rem bala\b/",
  "/\b([Tt])rigesim([oa]s?)\b/",
  "/\b([Tt])rof[ée]is\b/",
  "/\b([Tt])uristic([oa]s?)\b/",
  "/\b([Uu])ltra(?:[\-\s][Vv]ioletas?|violetas)\b/",
  "/\b([Uu])m um\b/",
  "/\b([Uu])m s[ií]ndrome\b/",
  "/\butil\b/",
  "/\bUtil\b/",
  "/\b([Uu])ltiliza(r|d[ao])\b/",
  "/\b([Vv])aríave(l|is)\b/",
  "/\b([Vv])asão\b/",
  "/\b([Vv])eiculo(s?)\b/",
  "/\b([Vv])erç[ãa]o\b/",
  "/\b([Vv])espera\b/",
  "/\b([Vv])ez enquando\b/",
  "/\b([Vv])iajens\b/",
  "/\b([Vv])iag(e|ou|a(?:r(?:am?|á|ão|em|iam?)?|m|vam?|ssem?|d[ao]s?|ndo)?)\b/",
  "/\b([Vv])igilancia(s?)\b/",
  "/\b([Vv])vigança/",
  "/\b([Vv])izualiza(ção|ções|dor(?:es)?)\b/",
  "/\b([Vv])izualiz(em?|ou|a(?:r(?:am?|á|ão|em|iam?)?|m|vam?|ssem?|d[ao]s?|ndo)?)\b/",
  "/\b([Vv])(?:oô|ôo)(s?)\b/",
  "/\b([Zz])oologico\b/"
);

?>
