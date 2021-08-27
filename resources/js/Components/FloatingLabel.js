import React from "react";

export default function FloatingLabel({
    forInput,
    value,
    className,
    children,
}) {
    return (
        <div className="relative">
            {children}
            <label
                htmlFor={forInput}
                className={
                    `absolute left-3 top-0 text-gray-600 text-xs transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 peer-focus:top-0 peer-focus:text-gray-600 peer-focus:text-xs ` +
                    (className ? className : "")
                }
            >
                {value}
            </label>
        </div>
    );
}
