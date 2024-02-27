import React from 'react';
import './App.css';

const App = () => {
  const insert = (num) => {
    document.form1.textview.value = document.form1.textview.value + num;
  };

  const equal = () => {
    const exp = document.form1.textview.value;
    if (exp) {
      document.form1.textview.value = eval(exp);
    }
  };

  const backspace = () => {
    const exp = document.form1.textview.value;
    document.form1.textview.value = exp.substring(0, exp.length - 1);
  };

  return (
    <div>
      <h1 className = "hi">Neon Calculator</h1>
      <table className="tab">
        <td style={{ width: '73%' }}>
          <h2>College Algebra</h2>
          <p>
            This course includes linear, quadratic, polynomial, rational, exponential, inverse functions and their graphs,
            linear inequalities, and linear systems of equations.<br />The objective of the subject is for the student to
            demonstrate increased ability in problem-solving and logical thinking. <br /><br />
          </p>
          <table style={{ width: '100%' }}>
            <tr>
              <td>
                <a href="https://mathonweb.com/help_ebook/html/graphs_2.htm">
                  <img className="data" src="https://drive.google.com/uc?export=view&id=1jCBTiySNKe3g2KGGv9HtFZzjaJNWhMTX" alt="Linear Graph" />
                </a>
              </td>
              <td>
                <a href="https://mathonweb.com/help_ebook/html/quadratic_5.htm">
                  <img className="data" src="https://drive.google.com/uc?export=view&id=1s03VicExaN8Xa8dJKbcVcjaaCPGey1oo" alt="Quadratic Graph" />
                </a>
              </td>
              <td>
                <a href="https://mathonweb.com/help_ebook/html/poly_0.htm">
                  <img className="data" src="https://drive.google.com/uc?export=view&id=1zO_z3zm2c6hHwMhCUcAhY4Me3gCtVs2w" alt="Polynomial Graph" />
                </a>
              </td>
              <td>
                <a href="https://mathonweb.com/help_ebook/html/expoapps.htm">
                  <img className="data" src="https://drive.google.com/uc?export=view&id=1X19zm4k-9Maa33teyoK22wTtJM3sdfWt" alt="Exponential Graph" />
                </a>
              </td>
            </tr>
            <tr style={{ textAlign: 'center' }}>
              <td>Linear Functions</td>
              <td>Quadratic Functions</td>
              <td>Polynomial Functions</td>
              <td>Exponential Functions</td>
            </tr>
          </table>
          <br /><br />
          <p>Submitted by: David Sherom Granada</p>
          <p>Subject: ITEC 50 - Web Systems and Technologies</p>
        </td>

        <td>
          <div className="calcborder">
            <div className="calculator">
              <form name="form1">
                <input className="textview" name="textview" />
              </form>
              <center>
                <table>
                  <tr>
                    <td>
                      <input className="btn" type="button" value="C" onClick={() => (document.form1.textview.value = ' ')} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="B" onClick={backspace} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="/" onClick={() => insert('/')} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="x" onClick={() => insert('*')} />
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input className="btn" type="button" value="7" onClick={() => insert(7)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="8" onClick={() => insert(8)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="9" onClick={() => insert(9)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="-" onClick={() => insert('-')} />
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input className="btn" type="button" value="4" onClick={() => insert(4)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="5" onClick={() => insert(5)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="6" onClick={() => insert(6)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="+" onClick={() => insert('+')} />
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input className="btn" type="button" value="1" onClick={() => insert(1)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="2" onClick={() => insert(2)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="3" onClick={() => insert(3)} />
                    </td>
                    <td rowspan={5}>
                      <input
                        className="btn"
                        style={{ height: '150px' }}
                        type="button"
                        value="="
                        onClick={equal}
                      />
                    </td>
                  </tr>

                  <tr>
                    <td colSpan={2}>
                      <input className="btn" style={{ width: '150px' }} type="button" value="0" onClick={() => insert(0)} />
                    </td>
                    <td>
                      <input className="btn" type="button" value="." onClick={() => insert('.')} />
                    </td>
                  </tr>
                </table>
              </center>
            </div>
          </div>
        </td>
      </table>
    </div>
  );
};

export default App;
