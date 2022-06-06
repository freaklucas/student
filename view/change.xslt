<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:12pt;background-color:teal; display:flex; align-items:center;flex:center;margin-left: 10%; flex-direction:row;">
    <xsl:for-each select="data/evaluation">
    <h2 style="margin-right:24px;">Dados Atuais</h2>
    <div style="background-color:teal;color:white;padding:4px;">
      <h1 style="display:flex; flex-direction:column;">Projeto de software</h1>
   <p style="bold;">Estatística</p>
    <p style="">10 pontos</p>
    <p style="bold;">peso 2</p>
    <p style="bold;"> data 28/06/2022</p>
    </div>

    <h2 style="margin-right:24px;">Alterar para</h2>
<div style="background-color:teal;color:white;padding:4px;">
  <h1 style="display:flex; flex-direction:column;">Projeto de software</h1>
<input placeholder="Insira nome da avaliação" type="text" style="font-weight:bold; display:flex; flex-direction:col; margin-right:12px;"><xsl:value-of select="subject"/>  </input>
<br/>

<input placeholder="insira o valor da avaliação" type="text" style="font-weight:bold; "><xsl:value-of select="value"/>  </input>

<br/>
<br/>

<input placeholder="insira o peso da nota" type="text" style="font-weight:bold; "><xsl:value-of select="weight"/>  </input>
<br/>
<br/>

<input placeholder="insira a data da avaliação" type="text" style="font-weight:bold; "><xsl:value-of select="date"/>  </input>
<br/>
    <button type="submit" style="margin-top:20%; display:flex;display:flex; flex-direction:column;" >
        Salvar dados editados
    </button>
</div>
</xsl:for-each>



</body>
</html>