using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Loginpage
{
    #region Resetpasswords
    public class Resetpasswords
    {
        #region Member Variables
        protected int _id;
        protected string _code;
        protected string _email;
        #endregion
        #region Constructors
        public Resetpasswords() { }
        public Resetpasswords(string code, string email)
        {
            this._code=code;
            this._email=email;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Code
        {
            get {return _code;}
            set {_code=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        #endregion
    }
    #endregion
}